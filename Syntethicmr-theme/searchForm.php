<div class="md_bc_search-cont_form">
  <div class="md_bc_search-form-cont">
    <form role="search" method="get" class="search-form md_bc_search-form" action="<?php echo home_url( '/' ); ?>">
        <input type="search" class="md_search_field" placeholder="<?php echo esc_attr_x( 'Buscar…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        <!-- <input type="submit" class="md_search-submit" value="" /> -->
        <div class="md_bc_search-form_cont_btn">
          <button type="submit" class="md_search-submit" value="" ></button>
        </div>
    </form>
  </div>
  
</div>