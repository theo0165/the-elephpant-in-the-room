<aside class="sidebar">
    <div class="logo">
        <a href="/">
            <img src="/public/img/COLORS.svg" alt="COLORS">
        </a>
    </div>
    <nav class="menu">
        <ul class="menu-list">
            <li class="menu-item"><a href="/">Home</a></li>
            <li class="menu-item"><a href="/new">New Pallet</a></li>
            <li class="menu-item"><a href="/sort_top">Top</a></li>
            <li class="menu-item"><a href="/sort_new">New</a></li>
        </ul>
    </nav>
    <div class="search">
        <form action="/search" method="get" id="search-form">
            <input type="text" name="q" placeholder="Search" id="search-input">
            <i class="fa-solid fa-magnifying-glass" onclick="document.getElementById('search-form').submit();"></i>
        </form>
    </div>
</aside>
