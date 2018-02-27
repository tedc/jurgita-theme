<div class="body-container">
  <?php if(is_singular('corsi')) : ?>
    <h2 class="title" style="text-align:center"><?php _e('Richiedi informazioni', 'jurgita'); ?></h2>
  <?php endif; ?>
  <form class="form-view theme5" id="agile-form" action="https://jurgita.agilecrm.com/formsubmit" method="GET">
<p class="agile-form-description"></p>
<div style="display: none; height: 0px; width: 0px;">
<input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Contatti">
<input type="hidden" id="_agile_domain" name="_agile_domain" value="jurgita">
<input type="hidden" id="_agile_api" name="_agile_api" value="52h2ls3vu6tlbu9r24sb4o9u0h">
<input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="#">
<input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
<input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="Great! Thanks for filling out the form.">
<input type="hidden" id="_agile_form_id_tags" name="tags" value="">

<input type="hidden" id="_agile_form_id" name="_agile_form_id" value="5759180434571264">
</div>
<!-- Text input-->
<div class="input-row agile-group required-control">
	<input maxlength="250" id="agilefield-1" name="first_name" type="text" placeholder="<?php _e('Nome (richiesto)', 'jurgita'); ?>" class="agile-height-default" required="">
</div>
<!-- Text input-->
<div class="input-row agile-group required-control">
  <input maxlength="250" id="agilefield-4" name="last_name" type="text" placeholder="<?php _e('Cognome (richiesto)', 'jurgita'); ?>" class="agile-height-default" required="">
</div>
<!-- Text input-->
<div class="input-row agile-group required-control">
  <input maxlength="250" id="agilefield-5" name="phone" type="text" placeholder="<?php _e('Telefono (richiesto)', 'jurgita'); ?>" class="agile-height-default" required="">
</div>
<!-- Text input-->
<div class="input-row agile-group required-control">
  <input maxlength="250" id="agilefield-2" name="email" type="email" placeholder="<?php _e('Email (richiesta)', 'jurgita'); ?>" class="agile-height-default" required="">
</div>
<!-- Select Basic -->
<?php if(is_singular('corsi')) : ?>
  <!-- Select Basic -->
<div class="agile-group" style="display: none;">
  <label class="agile-label" for="agilefield-7">Select Basic</label>
  <div class="agile-field-xlarge agile-field">
    <select id="agilefield-7" name="Tipologia Corso" class="agile-height-default">
      <option value="<?php the_title(); ?>" selected="selected"><?php the_title(); ?></option>
    </select>
  </div>
</div>
<?php endif; ?>
<div class="input-row agile-group"<?php if(is_singular('corsi')) : ?> style="display:none;"<?php endif; ?>>
  <div class="agile-field-xlarge agile-field agile-select">
    <div class="agile-select__option">
      <div class="agile-select__value" data-default="<?php _e('Seleziona un corso', 'jurgita'); ?>"><?php _e('Seleziona un corso', 'jurgita'); ?></div>
      <i class="icon-arrow-down"></i>
    </div>
    <select id="agilefield-3" name="Corso" class="agile-height-default">
      <?php if(is_singular('corsi')) : ?>
        <option selected="selected" value="<?php data_corsi_form(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?> <?php the_field('luogo'); ?>"><?php data_corsi_form(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?> <?php the_field('luogo'); ?></option>
      <?php else : ?>
    	<option value=""><?php _e('Seleziona', 'jurgita'); ?></option>
     <?php $today = date('Ymd');
    $args = array (
        'post_type' => 'corsi',
        'meta_query' => array(
            array(
                'key'       => 'data_inizio',
                'compare'   => '>=',
                'value'     => $today,
            ),
             array(
                'key'       => 'data_fine',
                'compare'   => '>=',
                'value'     => $today,
            )
        ),
        'meta_key'  => 'data_fine',
        'orderby'   => 'meta_value_num',
        'order'     => 'ASC',
        'paged'     => $paged
    );


    $corsi = new WP_Query($args); if ($corsi->have_posts()) : $i = 0; while ($corsi->have_posts()) : $corsi->the_post(); ?>

    	<option value="<?php data_corsi_form(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?> <?php the_field('luogo'); ?>"><?php data_corsi_form(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?> <?php the_field('luogo'); ?></option>
    <?php $i++; endwhile; wp_reset_query(); wp_reset_postdata(); endif; endif; ?>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="input-row agile-group">
  <textarea maxlength="250" id="agilefield-6" name="note" placeholder="<?php _e('Note', 'jurgita'); ?>" class="agile-height-default"></textarea>
 </div>

<!--recaptcha aglignment-->
<!-- Button -->
<div class="input-row agile-group">
  <div class="agile-field agile-button-field" style="text-align: center;">
    <button type="submit" class="agile-button btn"><?php _e('Invia', 'jurgita'); ?></button>
    <br><span id="agile-error-msg"></span>
  </div>
</div>

</form>
<script type="text/javascript">
(function(a){var b=a.onload,p=true;isCaptcha=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};var formLen=document.forms.length;for(i=0;i<formLen;i++){if(document.forms.item(i).getAttribute("id")== "agile-form"){a.document.forms.item(i).onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v5(this)}catch(b){this.submit()}}}}})(window);
</script>
</div>