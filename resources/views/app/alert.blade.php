<div style="margin-top: 100px">
        @if(count($errors)>0)
        @foreach ($errors->all() as $error )
            <div class="container">
                    <div class="alert alert-danger">
                            {{$error}}
                    </div>
            </div>

        @endforeach
        @endif

        @if(session('sucess'))
            <div class="container">
                    <div class="alert alert-success, container">
                            {{session('Sucess')}}
                    </div>
            </div>

        @endif

        @if(session('error'))
        <div class="container">
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        </div>
        @endif
</div>

