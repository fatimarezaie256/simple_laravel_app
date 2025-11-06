<div>
    <h1 style="text-align:center">" Hi dear {{ request()->name}} "</h1>
    @include("subview.input",['name1'=> request()->name1])
   
</div>
