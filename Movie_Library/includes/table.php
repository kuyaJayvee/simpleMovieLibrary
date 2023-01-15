<div class="col overflow-auto">

    <table class="table rounded table-bordered h6 text-secondary mt-2">
        <thead id="table-thead">
            <th>Image</th>
            <th>Title</th>
            <th>Director</th>
            <th>Genre</th>
            <th>Release Date</th>
            <th>Stars</th>
            <th>Plot</th>
        </thead>
        <tbody class="table text-light" id="data-search">
             
           <!-- retrieve data from database -->
            <?php
            include('read.php');
            ?>
        </tbody>
    </table>
</div>