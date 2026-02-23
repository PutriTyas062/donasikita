<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="card p-3 m-auto" style="width: 600px;">
        <h3 class="text-center">Login</h3>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session('error'); ?>
            </div>
        <?php endif; ?>
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors(); ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('/login'); ?>" method="post">
            <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <br/>
            <br/>
            <a href="<?= base_url('register');?>">Don't Have an Account? Register</a>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>