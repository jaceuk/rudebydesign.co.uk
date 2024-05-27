<?php
$personalised_content = get_field_object('homepage_personalised_gifts');
$size = 'large';

if ($personalised_content) {
  $content = $personalised_content['value'];
  $title = $content['title'];
  $description = $content['description'];
  $term_id =  $content['tag'][0];
  $term_name = get_term($term_id)->name;
  $image_id = $content['image']['id'];
  $url = get_tag_link($term_id);

  // print "<pre>";
  // print_r($personalised_content);
  // print "</pre>";


?>
  <section class="home-section personalisation-section">
    <div class="inner-wrapper">
      <h2 class="underline"><?php echo $title; ?></h2>
      <div class="col-2">
        <div class="text">
          <?php echo $description; ?>
        </div>
        <div>
          <a class="collection-card" href="<?php echo $url; ?>">
            <div class="image">
              <?php
              if (!empty($image_id)) {
                echo wp_get_attachment_image($image_id, $size);
              }
              ?>
            </div>
            <dv class="h4"><?php echo $term_name; ?></dv>
          </a>
        </div>
      </div>
    </div>
  </section>
<?php } ?>