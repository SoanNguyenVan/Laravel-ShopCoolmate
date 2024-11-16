<style>
    .alert-container {
        background-color: #E8E8E8;
      
        border-radius: 10px;
    }
    .alert-container ul {
        padding: 12px 0 12px 24px;
    }
    .alert-container li {
        list-style: unset;
        color: red;
        font-size: 12px
    }
    .alert-container li::marker {
        color: red
    }
</style>

<div class="alert-container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>