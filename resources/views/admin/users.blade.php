<html>
<head>
    <meta charset="utf-8">
<style>


.userchart{
    width:0spx;
}
</style>
</head>


<body>
<div class = "container">
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Google</th>
            <th>Twitter</th>
            <th>Github</th>
        </tr>

        @if($user)
        @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u['frist-name']}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->google_id}}</td>
                <td>{{$u->twitter_id}}</td>
                <td>{{$u->github_id}}</td>
            <tr>
        @endforeach
    </table>

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <h1>{{ $chart1->options['chart_title'] }}</h1>
                    {!! $chart1->renderHtml() !!}

                </div>

            </div>
        </div>
    </div>
</div>

{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
</body>
</html>
