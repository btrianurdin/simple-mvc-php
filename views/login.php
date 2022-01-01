<?php $this->include('templates/header'); ?>
<div class="row justify-content-center mt-4">
  <div class="col-4 card">
    <div class="card-body">
      <h3 class="text-center">Login</h3>
      <hr class="divider">
      <form action="" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" placeholder="Your email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" placeholder="Your password" class="form-control">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success w-100">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $this->include('templates/footer'); ?>