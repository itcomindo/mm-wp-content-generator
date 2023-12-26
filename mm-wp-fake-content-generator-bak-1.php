<?php
/*
Plugin Name: MM WP Fake Content Generator
Description: Plugin untuk menghasilkan konten palsu.
Version: 1.0
Author: Anda
*/

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'fcg-content.php';
require_once plugin_dir_path(__FILE__) . 'fcg-title.php';



function mm_add_menu()
{
    add_menu_page('MM WP Fake Content Generator', 'Fake Content', 'manage_options', 'mm-fake-content', 'mm_display_options');
}
add_action('admin_menu', 'mm_add_menu');

function mm_display_options()
{
    // HTML untuk menampilkan form opsi
?>
    <div class="wrap">
        <h2>MM WP Fake Content Generator</h2>
        <form method="post" action="">
            <!-- Input Jumlah Post -->
            <label for="jumlah_post">Jumlah Post:</label>
            <!-- <input type="number" id="jumlah_post" name="jumlah_post" max="100"><br><br> -->
            <input type="number" id="jumlah_post" name="jumlah_post" max="100" value="1"><br><br>
            <!-- Pilihan Kategori -->
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori">
                <?php
                //ambil semua kategori walaupun tidak ada post yang terkait
                $categories = get_categories(array('hide_empty' => 0));
                foreach ($categories as $category) {
                    echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
                }
                ?>
            </select><br><br>

            <!-- Tombol untuk Media Library (opsional: implementasi JavaScript untuk membuka Media Library) -->
            <button type="button" id="pilih_media">Pilih Media</button><br><br>

            <input type="submit" name="mm_generate" value="Start" />
        </form>
    </div>
<?php
    mm_handle_post_request();
}


function mm_handle_post_request()
{
    if (isset($_POST['mm_generate'])) {
        $jumlah_post = intval($_POST['jumlah_post']);
        $kategori = sanitize_text_field($_POST['kategori']);
        // Logika untuk membuat post
        mm_create_fake_posts($jumlah_post, $kategori);
    }
}

function mm_create_fake_posts($jumlah_post, $kategori)
{
    for ($i = 0; $i < $jumlah_post; $i++) {
        $judul = fcg_title(); // Memilih judul secara acak di setiap iterasi
        $content = fcg_content(); // Anda bisa mengisi fungsi ini seperti fcg_title()

        $new_post = array(
            'post_title'    => $judul,
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_category' => array($kategori)
        );
        wp_insert_post($new_post);
    }
}
