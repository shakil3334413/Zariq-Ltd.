<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Assigned Complain</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" wire:submit.prevent="save">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Support Tema Name</label>
                                        </div>
                                        <select class="form-control" id="inputGroupSelect01"  wire:model.debounce.500ms="assigned_to" name="assigned_to" required>
                                            <option selected>Choose Support Team</option>
                                            @foreach ($teamSupports as $teamSupport)
                                                <option value="{{ $teamSupport->id }}">{{ $teamSupport->team_name }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('assigned_to')" class="mt-2" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

