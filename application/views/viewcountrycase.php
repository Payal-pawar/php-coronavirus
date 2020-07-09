<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">COVID-19 CORONAVIRUS PANDEMIC
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <h4 style="color:dodgerblue;">CoronaVirus Updates</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h5><a href="" class="stretched-link text-danger">View By country</a></h5>
        </div>
    </div>
            <div class="clearfix">
                <div class="col form-inline">
                    <input class="form-control" type="text" onkeyup="myFunction()" placeholder="Search...." id="myInput">
                </div>
            </div>
        
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="country">Country</th>
                        <th scope="col">Total cases</th>
                        <th scope="col">Total Deaths</th>
                        <th scope="col">Total Recovered</th>
                    </tr>
                </thead>
                <tbody id="datatable" style="background-color:powderblue;">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("datatable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>