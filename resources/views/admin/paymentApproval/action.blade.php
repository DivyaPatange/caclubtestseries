@if($status === "approved")
<button type="button" data-id="{{ $id }}" class="btn btn-danger reject px-2 py-1"><i class="fa fa-times"></i></button>
@elseif($status === "rejected")
<button type="button"  data-id="{{ $id }}" class="btn btn-success approve px-2 py-1">
    <i class="fa fa-check"></i>
</button>
@else
<button type="button"  data-id="{{ $id }}" class="btn btn-success approve px-2 py-1"><i class="fa fa-check"></i></button>
<button type="button"  data-id="{{ $id }}" class="btn btn-danger reject px-2 py-1">
    <i class="fa fa-times"></i>
</button>
@endif