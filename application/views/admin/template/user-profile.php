<div class="user-session">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login as! <strong class="text-default"><?= $admin->level ?></strong> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?= base_url('edit_profile') ?>">Setting Account</a></li>
                <li><a href="<?= base_url('admin_logout') ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>