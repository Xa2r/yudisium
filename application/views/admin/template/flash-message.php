<?php if ($this->session->flashdata("success")) : ?>
    <div class="flash-message">
        <div class="alert alert-success show" role="alert">
            <?= $this->session->flashdata("success"); ?>
        </div>
    </div>
<?php elseif ($this->session->flashdata("warning")) : ?>
    <div class="flash-message">
        <div class="alert alert-warning show" role="alert">
            <?= $this->session->flashdata("warning"); ?>
        </div>
    </div>
<?php elseif ($this->session->flashdata("danger")) : ?>
    <div class="flash-message">
        <div class="alert alert-danger show" role="alert">
            <?= $this->session->flashdata("danger"); ?>
        </div>
    </div>
<?php endif; ?>