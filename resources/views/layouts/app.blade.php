<!DOCTYPE html>
<html lang="en">
    @include('tampilan.head')

    

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('tampilan.sidebar')
            
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                @include('tampilan.navbar')
            </header>
            <div id="main-content">
                <section class="section">
                    @yield('content')
                  </section>
                  @include('tampilan.footer')
                
            </div>
        </div>
    </div>
    @include('tampilan.script')
    
</body>

</html>