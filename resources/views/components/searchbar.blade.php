<section class="tg-sectionspace" style="padding-bottom:30px">
    <div class="container">
        <div class="row">
            <form class="tg-formtheme tg-formtrip" id="searchForm" action="{{route('postSearch')}}" method="POST">
                @csrf
                <fieldset class="search-form-wrapper">
                    <div class="form-group">
                        <div class="tg-input">
                            <input
                                type="text"
                                name="title"
                                class="tg-input-text"
                                placeholder="Dove vuoi alloggiare?"
                            />
                        </div>
                    </div>
                    <div id="tg-search-submit">
                        <button class="tg-btn searchbar" type="submit">
                            <span>Trova appartamenti</span>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>

