<div class="container-sm">
  <h1 class="mt-5">TODO App</h1>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Add item</div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="todoText" class="form-label">Description:</label>
              <textarea
                class="form-control"
                placeholder="Enter your TODO item here"
                id="todoText"></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="addItem();">
              Add
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <h2 class="mt-5">TODO Items</h2>
  <div class="row" id="itemList">
  </div>
</div>
<script src="/assets/js/todo-solution.js"></script>