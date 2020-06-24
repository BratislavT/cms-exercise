<div class="container mb-4">
    <form id="frm" name="registration" action="/subscription" method="post">
        <div class="row pb-4 pt-4">
            <div class="col-sm-6"
                
            {{ csrf_field() }}

            @foreach ($elements[0] as $element)                 
                @if ($element->type == 'input')
                <div class="form-group">
                    <label class="control-label" for="{{$element->id}}"><span class="star">{{$element->required == "yes" ? "*" : ""}}</span> {{$element->label}}</label>
                    <input id="{{$element->id}}" type="text" class="form-control" name="{{$element->name}}" value="{{$element->value}}" />
                    @foreach ($element->error as $error)
                    <p class="error">{{$error}}</p>
                    @endforeach
                </div>
                
                @elseif ($element->type == 'select')
                <div class="form-group">
                    <label class="control-label" for="{{$element->id}}"><span class="star"></span> {{$element->label}}</label>
                    <select id="{{$element->id}}" class="form-control" name="{{$element->name}}">
                        @foreach ($element->options as $option)
                        <option value="{{$option}}">{{$option}}</option>
                        @endforeach
                    </select>
                    @foreach ($element->error as $error)
                    <p class="error">{{$error}}</p>
                    @endforeach
                </div>
                
                @elseif ($element->type == 'link')
                <div class="form-group">
                    <input id="{{$element->id}}" class="mr-2" type="checkbox">
                    <a target="_blank" href="{{$element.href}}"><span class="star">{{$element->required == "yes" ? "*" : ""}}</span> {{element.label}}</a>
                    @foreach ($element->error as $error)
                    <p class="error">{{$error}}</p>
                    @endforeach
                </div>
                
                @elseif ($element->type == 'newsletter')
                <div class="form-group">
                    <input id="{{$element->id}}" class="mr-2" type="checkbox">
                    <span><span class="star">{{$element->required == "yes" ? "*" : ""}}</span> {{$element->label}} </span>
                    @foreach ($element->error as $error)
                    <p class="error">{{$error}}</p>
                    @endforeach
                </div>
            
                @elseif ($element->type == 'button')
                <div class="form-group">
                    <button class="btn btn-dark">{{$element->label}}</button>
                </div>       
                @endif
            @endforeach
            </div>
        </div>
    </form>
</div>


<!-- <script src='js/my_script_front.js' type='text/javascript'></script> -->