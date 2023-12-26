<?php
/*
Plugin Name: MM WP Fake Content Generator
Description: Plugin untuk menghasilkan konten palsu.
Version: 1.0
Author: Anda
*/
defined('ABSPATH') || exit;
require_once plugin_dir_path(__FILE__) . 'fcg-title.php';
require_once plugin_dir_path(__FILE__) . 'fcg-content.php';
require_once plugin_dir_path(__FILE__) . 'fcg-tag.php';

//disable gutenberg
// add_filter('use_block_editor_for_post', '__return_false', 10);


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
        <form id="fcg-form" method="post" action="">

            <div class="fcg-form-item">
                <label for="jumlah_post">Jumlah Post:</label>
            </div>
            <div class="fcg-form-item">
                <input type="number" id="jumlah_post" name="jumlah_post" max="100" value="1"><br><br>
            </div>
            <div class="fcg-form-item">
                <label for="kategori">Kategori:</label>
                <select id="kategori" name="kategori">
                    <?php
                    $categories = get_categories(array('hide_empty' => 0));
                    foreach ($categories as $category) {
                        echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
                    }
                    ?>
                </select><br><br>

            </div>

            <div class="fcg-form-item">
                <button type="button" id="pilih_media" class="fcg-button">Pilih Media</button>
                <small class="fcg-help-text hide">Media Sudah Terpilih</small>
                <br>

                <input type="hidden" id="image_id" name="image_id" value="">


                <!-- <input id="fcg-submit" class="fcg-button" type="submit" name="mm_generate" value="Start" /> -->

                <input id="fcg-submit" class="fcg-button" type="submit" name="mm_generate" value="Start" disabled />



            </div>
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
        $gallery_ids = isset($_POST['image_id']) ? sanitize_text_field($_POST['image_id']) : '';
        // Logika untuk membuat post
        mm_create_fake_posts($jumlah_post, $kategori, $gallery_ids);
    }
}




function mm_create_fake_posts($jumlah_post, $kategori, $gallery_ids)
{
    $image_ids = explode(',', $gallery_ids);
    for ($i = 0; $i < $jumlah_post; $i++) {
        $judul = fcg_title();
        $content = fcg_content();
        $tags = mm_fcgtag();
        $new_post = array(
            'post_title'    => $judul,
            'post_content'  => $content,
            'tags_input'    => $tags,
            'post_status'   => 'publish',
            'post_author' => get_current_user_id(),
            'post_type' => 'post',
            'post_category' => array($kategori)
        );
        $post_id = wp_insert_post($new_post);
        if (!empty($image_ids)) {
            set_post_thumbnail($post_id, $image_ids[array_rand($image_ids)]);
        }
    }
}



function mm_enqueue_media_uploader()
{
    wp_enqueue_media();
    wp_enqueue_style('mm-media-uploader', plugins_url('/css/fcg.css', __FILE__), array(), null, 'all');
    wp_enqueue_script('mm-media-uploader', plugins_url('/js/media-uploader.js', __FILE__), array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'mm_enqueue_media_uploader');
