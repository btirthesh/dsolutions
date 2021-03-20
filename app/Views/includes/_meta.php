<?php
function getMeta($data){
    $title = $data["title"] ?? '';
    $keywords = $data['keywords'] ?? '';
    $description = $data['description'] ?? '';
    $fbtitle = $data['fbtitle'] ?? '';
    $fbdescription = $data["fbdescription"] ?? '';
    $fbtype = $data["fbtype"] ?? '';
    $fbimg = $data["fbimg"] ?? '';
    ?>
    <title><?=$title?></title>

    <meta name="keywords" content="<?=$keywords?>">
    <meta name="”description”" content="<?=$description?>">
    <meta name="”robots”" content="index, follow">
    <!-- FB MetaTags -->
    <meta property="og:title" content="<?=$fbtitle?>">
    <meta property="og:description" content="<?=$fbdescription?>">
    <meta property="og:type" content="<?=$fbtype?>">
    <meta property="og:image" content="<?=$fbimg?>">
    <link rel="shortcut icon" href="<?php echo base_url('Assets/images/favicon.ico'); ?>" type="image/x-icon">

<?php
}
?>