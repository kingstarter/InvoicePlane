<script>
    $().ready(function () {
        $('#btn-submit').click(function () {
            $('#form-settings').submit();
        });
        $("[name='settings[default_country]']").select2({
            placeholder: "<?php echo trans('country'); ?>",
            allowClear: true
        });
    });
</script>

<div id="headerbar">
    <h1 class="headerbar-title"><?php echo trans('settings'); ?></h1>
    <?php $this->layout->load_view('layout/header_buttons'); ?>
</div>

<ul id="settings-tabs" class="nav nav-tabs nav-tabs-noborder">
    <li class="active">
        <a data-toggle="tab" href="#settings-general"><?php echo trans('general'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-invoices"><?php echo trans('invoices'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-quotes"><?php echo trans('quotes'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-taxes"><?php echo trans('taxes'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-email"><?php echo trans('email'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-merchant"><?php echo trans('merchant_account'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-projects-tasks"><?php echo trans('projects'); ?></a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings-updates"><?php echo trans('updates'); ?></a>
    </li>
</ul>

<form method="post" id="form-settings" enctype="multipart/form-data">

    <input type="hidden" name="_ip_csrf" value="<?= $this->security->get_csrf_hash() ?>">

    <div class="tabbable tabs-below">

        <div class="tab-content col-xs-12 col-md-10 col-lg-8">

            <div id="settings-general" class="tab-pane active">
                <?php $this->layout->load_view('layout/alerts'); ?>

                <?php $this->layout->load_view('settings/partial_settings_general'); ?>
            </div>

            <div id="settings-invoices" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_invoices'); ?>
            </div>

            <div id="settings-quotes" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_quotes'); ?>
            </div>

            <div id="settings-taxes" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_taxes'); ?>
            </div>

            <div id="settings-email" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_email'); ?>
            </div>

            <div id="settings-merchant" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_merchant'); ?>
            </div>

            <div id="settings-projects-tasks" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_projects_tasks'); ?>
            </div>

            <div id="settings-updates" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_updates'); ?>
            </div>

        </div>

    </div>

</form>
