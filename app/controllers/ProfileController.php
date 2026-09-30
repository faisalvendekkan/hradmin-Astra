<?php
declare(strict_types=1);

final class ProfileController
{
    public function index(): void
    {
        $u = Auth::require();
        view('users/profile', ['title' => 'Your profile', 'u' => $u]);
    }

    public function save(): void
    {
        $u    = Auth::require();
        $name = input('name');
        if (mb_strlen($name) < 2 || mb_strlen($name) > 120) {
            flash('error', 'Enter your full name.');
            redirect('profile');
        }
        DB::run('UPDATE users SET name = ? WHERE id = ?', [$name, $u['id']]);
        flash('success', 'Profile saved.');
        redirect('profile');
    }
}
