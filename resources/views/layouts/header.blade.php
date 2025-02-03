<header>
    <h1>Coffee Valley</h1>
    <h4>Taste the love in every cup!</h4>
    <p>
        One Alewife Center 3rd Floor
        <br>
        Cambridge, MA 02140
    </p>
</header>
<nav>
    <a href="/home">Home</a>
    <a href="/catalogue">Catalogue</a>
    <a href="/distributors">Distributors</a>
    <a href="/uploads">Upload</a>
    @if(Session::has('user_id'))
        <a href="/logout">Logout</a>
    @else
        <a href="/login">Login</a>
    @endif
</nav>
