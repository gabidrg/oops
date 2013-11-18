<?php
/**
 * @file
 */
?>
<?php
?>
<script>jQuery(document).ready(function(){jQuery("#tabs-profile").tabs();});</script>

<div class="two-33-66 at-panel panel-display clearfix">
    <div class="region region-two-50-top region-conditional-stack">
        <div class="region-inner clearfix">
        </div>
    </div>
            <div class="region region-two-33-66-first">
                <div class="region-inner clearfix">
                    <?php print render($form['picture']); ?>
                </div>
            </div>
    <div class="region region-two-33-66-second">

            <div class="region-inner clearfix">
                <div id="tabs-profile">
                    <ul>
                        <li><a href="#tabs-profile-1">Profile</a></li>
                        <li><a href="#tabs-profile-2">Account</a></li>
                        <li><a href="#tabs-profile-3">Settings</a></li>
                    </ul>
                    <div id="tabs-profile-1">
                        <?php print render($form['profile_student']); ?>
                        <?php print render($form['profile_mentor']); ?>
                    </div>
                    <div id="tabs-profile-2">
                        <?php print render($form['account']); ?>
                    </div>
                    <div id="tabs-profile-3">
                        <?php
                            $actions = $form['actions'];
                            unset($form['actions']);
                            print drupal_render_children($form);
                        ?>
                    </div>
                    <?php //dsm($form); ?>
                </div>
            </div>

    </div>
    <div class="region region-two-33-66-bottom region-conditional-stack">
        <div class="region-inner clearfix">
            <?php print render($actions); ?>
        </div>
    </div>
</div>
