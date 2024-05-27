@extends('layouts.app')
@section('content')
    <style>
        .gacha-container {
            width: 20%;
            margin: 0 auto;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .gacha-slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .gacha-item {
            min-width: 100%;
            box-sizing: border-box;
        }

        .gacha-item img {
            width: 100%;
            border-radius: 10px;
        }

        .spin-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
    <div class="th-comment-form">
        <div class="row">
            <div class="container">
                <div class="gacha-container">
                    <div class="gacha-slider">
                        @foreach ($items as $item)
                            <div class="gacha-item" data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                data-img="{{ url($item->img) }}" data-tipe="{{ $item->tipe }}">
                                <img src="{{ url($item->img) }}" alt="{{ $item->name }}">
                                <p>{{ $item->name }}</p>
                            </div>
                        @endforeach
                    </div>
                    <button class="spin-button">Spin</button>
                </div>
            </div>
        </div>
    </div>

    <div id="Testing" class="white-popup mfp-hide">
        <div class="container bg-black3 rounded-10">
            <div class="row gx-30">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <h2 class="product-title"></h2>
                        <div class="actions">
                            <button class="th-btn collect-button">Collect <span class="icon"><i
                                        class="fa-solid fa-arrow-right ms-3"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            const gachaSlider = document.querySelector('.gacha-slider');
            const items = document.querySelectorAll('.gacha-item');
            const spinButton = document.querySelector('.spin-button');
            const itemWidth = items[0].clientWidth;
            const spinDuration = 500;
            let currentIndex = 0;
            let isSpinning = false;
            let selectedItem = null;

            spinButton.addEventListener('click', function() {
                if (!isSpinning) {
                    isSpinning = true;
                    const totalItems = items.length;
                    const randomIndex = Math.floor(Math.random() * totalItems);
                    const offset = randomIndex * itemWidth * -1;
                    const totalSpinDuration = spinDuration * totalItems;
                    gachaSlider.style.transition = `transform ${totalSpinDuration}ms ease-out`;
                    gachaSlider.style.transform = `translateX(${offset}px)`;

                    setTimeout(() => {
                        selectedItem = items[randomIndex];
                        const selectedName = selectedItem.getAttribute('data-name');
                        const selectedTipe = selectedItem.getAttribute('data-tipe');
                        const selectedImg = selectedItem.getAttribute('data-img');

                        document.querySelector('.product-title').textContent = 'Cloth ' +
                            selectedName + ' Tipe ' + selectedTipe;
                        document.querySelector('.product-big-img img').src = selectedImg;
                        document.getElementById('Testing').classList.add('mfp-ready');
                        $.magnificPopup.open({
                            items: {
                                src: '#Testing'
                            },
                            type: 'inline'
                        });
                        isSpinning = false;
                    }, totalSpinDuration);
                }
            });

            gachaSlider.addEventListener('transitionend', function() {
                gachaSlider.style.transition = '';
            });

            document.querySelector('.collect-button').addEventListener('click', function() {
                if (selectedItem) {
                    const id = selectedItem.getAttribute('data-id');

                    console.log("Collecting item with id_cloth:", id); // Debugging line

                    $.ajax({
                        url: "{{ route('colectitem') }}",
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            console.log("Success response:", response); // Debugging line
                            alert('Item collected successfully!');
                            $.magnificPopup.close();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error response:", xhr
                                .responseText); // Debugging line
                            alert('Error collecting item. Please try again.' + id);
                        }
                    });
                }
            });
        });
    </script>
@endsection
