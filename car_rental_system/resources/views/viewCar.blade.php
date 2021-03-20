
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container">
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr align="center">
            <th scope="col" colspan="2">Car Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" align="center"><img src="{{$car->image}}" height="300px" width="350px"></td>
            </tr>
            <tr>
            <th scope="row">Name</th>
            <td>{{$car->name}}</td>
            </tr>
            <tr>
                <th scope="row">Fuel</th>
                <td>{{$car->fuel}}</td>
            </tr>
            <tr>
                <th scope="row">Price</th>
                <td>{{$car->price}}</td>
            </tr>
            <tr>
                <th scope="row">City</th>
                <td>{{$car->city}}</td>
            </tr>
            <tr>
                <th scope="row">Seat</th>
                <td>{{$car->seat}}</td>
            </tr>
            <tr>
                <th scope="row">Available</th>
                <td>{{$car->available}}</td>
            </tr>
            <tr>
                <form action={{"/admin/editCar/".$car->id}} method="post">
                @csrf
                    <th scope="row" colspan="2"><a href="/admin/showCars/" class="btn btn-info">Go Back</a>
                    <input type="submit" value="Edit" class="btn btn-primary">
                </form>
                <form action={{"/admin/deleteCar/".$car->id}} method="post" class="d-inline">
                    @csrf
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                
            </tr>
            
                

        </tbody>
    </table>
</div>
