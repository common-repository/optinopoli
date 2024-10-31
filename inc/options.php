<?php
/**
 * Plugin Options page
 *
 * @package    Install Optinopoli
 * @author     optinopoli™ <support@optinopoli.com>
 * @copyright  Copyright (c) Takanomi Limited | optinopoli™ (email support@optinopoli.com)
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */?>
<div class="wrap">
  <h2><?php _e( 'Install optinopoli™', 'install-optinopoli'); ?></h2>

  <hr />
  <div id="poststuff">
  <div id="post-body" class="metabox-holder columns-2">
    <div id="post-body-content">
      <div class="postbox">
        <div class="inside">
          <form name="dofollow" action="options.php" method="post">

            <?php settings_fields( 'install-optinopoli' ); ?>

            <p>
              1. Add the domain of this website to your  <a href="https://www.optinopoli.com/">optinopoli™ account</a>
            </p>
            <p>
              2. You'll be provided with a Javascript snippet&mdash;enter this below and click the <i>Install optinopoli™</i> button:
            </p>
            
            <textarea style="width:98%;" rows="10" cols="57" id="insert_footer" name="optinopoli_insert_footer"><?php echo esc_html( get_option( 'optinopoli_insert_footer' ) ); ?></textarea>

            <p>
              <small>The script above will be inserted before the closing <code>&lt;body&gt;</code> tag.</small>
            </p>

            <hr>

            <p class="submit">
              <input class="button button-primary" type="submit" name="Submit" value="<?php _e( 'Install optinopoli™', 'install-optinopoli'); ?>" />
            </p>

          </form>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>
