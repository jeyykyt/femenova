<style>
    /*Educational Contents*/

    .center-justify {
        text-align: justify;
        text-align-last: center;
    }
    /*.highlight {*/
    /*    background-color: #ffeb3b;*/
    /*    font-weight: bold;*/
    /*}*/

    .fixed-size-img {
        width: 100%;
        max-width: 197.7px;
        height: 200px;
        object-fit: cover;
    }
    .pagination-custom {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .truncate {
        display: inline-block;
        max-width: 100%;
    }
    .show-more {
        color: #ed6662;
        cursor: pointer;
        text-decoration: underline;
    }

    /*Achievements*/
    .content-container {
        margin: 0 20px;
    }

    .achievement-card {
        border: none;
        overflow: hidden;
        transition: transform 0.2s ease-in-out;
    }

    .achievement-card:hover {
        transform: scale(1.05);
    }

    .achievement-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .achievement-overlay {
        background: rgba(0, 0, 0, 0.5);
        color: white;
        transition: background 0.3s ease-in-out;
    }

    .achievement-card:hover .achievement-overlay {
        background: rgba(0, 0, 0, 0.7);
    }

    .modal .achievement-img {
        height: auto;
    }

/*testimonials*/

    .testimonial-content {
        text-align: justify;
        text-indent: 2em; /* Adjust the indent size as needed */
    }
</style>
