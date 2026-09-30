<div class="auth-card">
  <div class="auth-brand">
    <span class="brand-mark"><?php View::partial('logo'); ?></span>
    <h1>Password managed by admin</h1>
    <p>Ask an administrator to set or reset your password.</p>
  </div>
  <div class="panel" style="padding:24px;text-align:center">
    <a class="btn btn-primary btn-block" href="<?= e(url()) ?>">Back to dashboard</a>
  </div>
  <form class="auth-foot" method="post" action="<?= e(url('logout')) ?>"><?= csrf_field() ?><button class="btn btn-quiet btn-sm" type="submit">Sign out</button></form>
</div>
