@extends('app.head')
{{-- //@extends('app.navbar') --}}
@section('content')
    <div style="margin-top: 100px" class="container">
        <div class="container">
            <Form>
                    <fieldset>
                      <legend>Personal information:</legend>
                      First name:<br>
                      <input type="text" name="firstname" value="Mickey"><br>
                      Last name:<br>
                      <input type="text" name="lastname" value="Mouse"><br><br>
                      <input type="submit" value="Submit">
                    </fieldset>
            </Form>
            </div>
    </div>
@endsection
