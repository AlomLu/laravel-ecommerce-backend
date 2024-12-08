<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <form action="{{route('update.division')}}" method="POST" class="theme-form theme-form-2 mega-form" id="updateDivision">
  @csrf  
  <input type="hidden" id="up_id">  

  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateModalLabel">Update Division</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-4 row align-items-center">
                <label class="form-label-title col-sm-3 mb-0">Division Name</label>
                <div class="col-sm-9">
                    <input class="form-control" name="up_div_name" id="up_div_name" type="text"
                        placeholder="Category Name">
                        <span class="text-danger up_name_err"></span>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary update_division">Update</button>
          </div>
      </div>
    </div>
  </form>
</div>
@include('admin.administrative.js.division_js')