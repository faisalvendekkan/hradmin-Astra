<div class="page-head">
  <div>
    <h1>Your profile</h1>
    <p>Signed in as <?= e($u['email']) ?>, <?= e(strtolower(Auth::ROLES[$u['role']] ?? $u['role'])) ?>. Last sign-in <?= e(fmt_datetime($u['last_login_at'])) ?>.</p>
  </div>
</div>
<form class="panel" method="post" action="<?= e(url('profile')) ?>" data-busy style="max-width:760px">
  <?= csrf_field() ?>
  <div class="form-section">
    <h3>Name</h3>
    <p>Shown in the activity log and to other users. Passwords are managed by an administrator.</p>
    <div class="field"><label for="name">Full name</label><input id="name" name="name" value="<?= e($u['name']) ?>" required maxlength="120"></div>
  </div>
  <div class="form-actions"><button class="btn btn-primary" type="submit">Save profile</button></div>
</form>
