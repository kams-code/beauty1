<div class="card my-3">
        <div class="card-header" role="tab" id="{{ isset($title) ? str_slug($title) :  'permissionHeading' }}">
            <h4 class="mb-0">
                <a role="button" data-toggle="collapse" href="#dd-{{ isset($title) ? str_slug($title) :  'permissionHeading' }}" aria-expanded="{{ isset($closed) ? 'true' : 'false' }}" aria-controls="dd-{{ isset($title) ? str_slug($title) :  'permissionHeading' }}">
                    {{ $title ?? 'Override Permissions' }} {!! isset($user) ? '<span class="text-danger">(' . $user->getDirectPermissions()->count() . ')</span>' : '' !!}
                </a>
            </h4>
        </div>
        <div id="dd-{{ isset($title) ? str_slug($title) :  'permissionHeading' }}" class="card-collapse collapse {{ $closed ?? 'in' }}" role="tabcard" aria-labelledby="dd-{{ isset($title) ? str_slug($title) :  'permissionHeading' }}">
            <div class="card-body">
                <div class="row">
    
    
                        <?php
                        $i=0;
                    ?>
                    @foreach($permissions as $perm)
                        <?php
                        $i=$i+1;
                            $per_found = null;
                            $check="checked";
                            if( isset($role) ) {
                                $per_found = $role->hasPermissionTo($perm->name);
                            }
    
                            if( isset($user)) {
                                $per_found = $user->hasDirectPermission($perm->name);
                            }
                            if($per_found!="1"){
                                $check="";
                            }
                        ?>
    
    <div class="col-md-3">
                        <div class="checkbox">
                            <input  {{$check }} id="checkbox{{$i }}" type="checkbox" name="permissions[]" value="{{ $perm->name }}"> 
                            <label for="checkbox{{$i }}"   class="{{ str_contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                                    {{ $perm->name }} 
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    