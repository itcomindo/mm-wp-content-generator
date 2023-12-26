<?php

/**
 * FCG Title
 */

defined('ABSPATH') or die('No script kiddies please!');


function fcg_title()
{
    $judul_array = ['Nam ut velit at sem pharetra finibus sed aliquam dui', 'Donec molestie lacus id eros placerat porttitor', 'Integer interdum tellus ac magna suscipit lacinia', 'Ut bibendum odio sit amet tincidunt ullamcorper', 'Duis id enim vehicula ornare felis ullamcorper efficitur libero', 'Maecenas quis nunc malesuada gravida tortor ac sollicitudin erat', 'Cras malesuada urna sit amet viverra tristique', 'Duis vel diam at augue hendrerit dignissim quis vitae erat', 'Nam porta turpis nec eleifend venenatis', 'Vestibulum congue odio id scelerisque pretium', 'Praesent ut nunc eget nunc accumsan mollis at et est', 'Etiam a dui nec odio euismod finibus vel eu lectus', 'Vestibulum euismod eros et euismod dictum', 'Donec id nulla eleifend nulla tristique blandit', 'Sed in ante vitae odio porttitor ornare sed a nulla', 'Sed molestie lectus sed tincidunt mattis', 'Cras vehicula nisi in arcu vestibulum lobortis', 'In rhoncus orci at tellus ultricies consequat', 'In commodo purus sed mi molestie vulputate', 'Curabitur id turpis nec neque euismod placerat id id mauris', 'Etiam sed purus mollis ultrices sapien a vulputate dolor', 'Phasellus at tellus ac orci mollis pellentesque', 'Suspendisse lacinia lacus eu magna suscipit dapibus', 'Vivamus congue urna non ipsum iaculis ut iaculis ipsum pharetra', 'Integer finibus sem malesuada euismod ex imperdiet viverra mi', 'Nullam interdum lacus at tincidunt congue', 'Vivamus sit amet dolor et augue hendrerit scelerisque', 'Maecenas euismod odio in molestie consequat', 'Pellentesque rutrum felis vel vulputate commodo', 'Sed at ex blandit arcu iaculis ultricies in non ligula', 'Nullam tincidunt turpis aliquet ipsum laoreet vitae viverra odio blandit', 'Nulla egestas ex vel maximus gravida', 'Etiam dapibus tortor ultrices tortor lobortis vitae viverra purus maximus', 'Aenean rhoncus nisi eu orci vestibulum blandit', 'Aliquam pellentesque dui id ante vehicula interdum', 'Ut at lorem eu velit tincidunt varius', 'Suspendisse suscipit sapien iaculis enim porttitor gravida', 'Cras cursus nisi id sapien ornare finibus', 'Quisque in risus semper malesuada est nec eleifend nulla', 'Aliquam consectetur elit nec est aliquet vitae lobortis ipsum volutpat', 'Quisque placerat magna ut sapien faucibus tempus', 'Fusce in leo dictum dapibus erat nec porta nibh', 'Aliquam posuere tellus eu massa cursus quis posuere ex tempus', 'Nullam aliquet nibh vel dui pharetra euismod', 'Duis aliquet odio efficitur lorem volutpat sed malesuada diam placerat', 'Donec ultricies odio eget blandit tincidunt', 'Nulla in arcu facilisis viverra sem et imperdiet massa', 'Aenean sit amet lacus tincidunt porta elit vel vestibulum arcu', 'Nullam ut ligula vulputate cursus massa sed maximus eros', 'Nulla gravida felis eu nunc vehicula in maximus neque ullamcorper', 'Aenean eget libero in tortor dapibus accumsan vel facilisis lorem', 'Nullam pellentesque libero a lorem congue hendrerit', 'Maecenas non eros sit amet lectus feugiat finibus', 'Ut commodo purus sed aliquet euismod', 'Ut venenatis tortor sed nisl bibendum laoreet', 'Vestibulum a erat sed leo tristique porta ut quis mi', 'Nam sagittis ante eu arcu aliquet blandit', 'Nunc egestas mauris fringilla bibendum elit vitae cursus odio', 'Quisque ultricies ipsum vel tincidunt laoreet', 'Ut euismod leo non massa maximus accumsan tempus ligula elementum', 'Quisque sed nisi nec purus efficitur faucibus', 'Suspendisse et quam ut leo dignissim aliquam vitae ac sapien', 'Donec eu libero a nunc ultrices fermentum ac nec tortor', 'Quisque volutpat orci sed orci elementum non congue ipsum finibus', 'Phasellus porta nisl nec dapibus cursus', 'Pellentesque at velit hendrerit mattis lacus in porttitor massa', 'Proin dignissim purus eget sollicitudin hendrerit', 'Integer feugiat lacus nec aliquam tincidunt', 'Nulla consequat purus eu lacus rhoncus consequat', 'Ut tincidunt erat a nunc ultrices vitae lobortis ante blandit', 'Praesent feugiat ex sit amet porta imperdiet', 'Morbi ac orci scelerisque blandit nisi in iaculis quam', 'Curabitur sit amet ligula ut arcu porta consectetur', 'Sed pharetra risus et mauris ultricies convallis', 'Aliquam feugiat ex placerat volutpat finibus', 'Proin sed velit nec velit congue commodo', 'Praesent vehicula lacus sit amet auctor ultricies', 'Maecenas sed massa imperdiet viverra ligula nec maximus lacus', 'Etiam eleifend nibh vulputate urna consectetur sollicitudin', 'Mauris feugiat lectus a aliquet convallis', 'Vivamus lobortis diam eget metus ultricies id faucibus turpis fermentum', 'Curabitur accumsan est ut risus tempus tincidunt mattis id ante', 'Donec facilisis neque at vulputate sagittis', 'Cras finibus est maximus sollicitudin dolor aliquet elementum est', 'Sed imperdiet ipsum a libero feugiat at tincidunt nisi viverra', 'Aenean tincidunt velit a lacinia varius', 'Proin ut urna sit amet mi ultricies gravida ac nec felis', 'Donec luctus justo aliquet sodales hendrerit', 'Morbi vitae neque id urna varius tempor', 'Pellentesque et elit tincidunt iaculis justo nec faucibus nibh', 'Nam pulvinar ante non neque tempor ut ultrices est sodales', 'Morbi pharetra massa non magna pretium auctor', 'Vestibulum finibus ante non malesuada dictum', 'Nullam molestie dolor consequat sapien vehicula imperdiet', 'Ut vitae dolor luctus elementum mi ac pellentesque sem', 'Phasellus sodales ligula eu elementum aliquam', 'Integer a lorem interdum sagittis augue at rutrum tortor', 'Nam eget massa et justo maximus congue', 'Nunc id ligula nec dolor vehicula elementum eu ac massa', 'Vestibulum ac eros rhoncus posuere erat sit amet imperdiet augue'];
    $randomIndex = array_rand($judul_array);
    return $judul_array[$randomIndex];
}
