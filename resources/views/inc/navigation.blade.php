<div class="navigation">
    <div class="container">  
        <ul>           
            <li><a href="/" class="{{ Request::is('/') ? 'font-white' : '' }}">Home</a></li>
            <li><a href="/information" class="{{ Request::is('information') ? 'font-white' : ''}}">Information</a></li>
            <li><a href="/information/create" class="{{ Request::is('information/create') ? 'font-white' : '' }}">Add</a></li>      
        </ul>         
    </div>
</div>