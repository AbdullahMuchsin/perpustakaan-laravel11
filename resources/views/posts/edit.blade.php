<div>
    @if ($user->isAdmin())
        <p>Welcome, Admin!</p>
    @else
        <p>Welcome, User!</p>
    @endif
</div>
