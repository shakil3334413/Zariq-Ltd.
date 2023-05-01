<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Team Member</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" wire:submit.prevent="save">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Team Member Name</label>
                                            <input type="text" wire:model="team_member_name" id="first-name-vertical" class="form-control" name="team_member_name" placeholder="Name">
                                            <x-input-error :messages="$errors->get('team_member_name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Team Member Email</label>
                                            <input type="email" wire:model="team_member_email" id="first-name-vertical" class="form-control" name="team_member_email" placeholder="Email">
                                            <x-input-error :messages="$errors->get('team_member_email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Team Member Phone</label>
                                            <input type="text" wire:model="team_member_phone" id="first-name-vertical" class="form-control" name="team_member_phone" placeholder="Phone">
                                            <x-input-error :messages="$errors->get('team_member_phone')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Complain Description</label>
                                            <textarea  wire:model.debounce.500ms="team_member_job_description" class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                            <x-input-error :messages="$errors->get('team_member_job_description')" class="mt-2" />
                                        </div>
                                      <div class="form-group">
                                        <label for="first-name-vertical">Support Team Name</label>
                                            <select class="form-control" id="inputGroupSelect01"  wire:model="support_team_id" name="support_team_id" required>
                                                <option selected>Choose Support Team</option>
                                                @foreach ($supportTeams as $supportTeam)
                                                    <option value="{{ $supportTeam->id }}">{{ $supportTeam->team_name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('support_team_id')" class="mt-2" />
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


