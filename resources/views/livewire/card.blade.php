<div style="background-color:white;">

    <div class="card">
        <h1>Css Animation</h1>
        <div class="card__inner">
            <div class="card__face card__face--front">
                <h2>{{ $cardData['frontTitle'] }}</h2>
            </div>
            <div class="card__face card__face--back">
                <div class="card__content">
                    <div class="card__header">
                        <img src="{{ $cardData['image'] }}" alt="" class="pp" />
                        <h2>{{ $cardData['name'] }}</h2>
                    </div>
                    <div class="card__body">
                        <h3>{{ $cardData['job'] }}</h3>
                        <p>{{ $cardData['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const card = document.querySelector(".card__inner");

        card.addEventListener("click", function (e) {
            card.classList.toggle('is-flipped');
        });
    </script>
</div>
