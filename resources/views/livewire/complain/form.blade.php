<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Complain</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" wire:submit.prevent="save">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Complain Description</label>
                                            <textarea  wire:model.debounce.500ms="complaint_description" class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                            <x-input-error :messages="$errors->get('complaint_description')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
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

