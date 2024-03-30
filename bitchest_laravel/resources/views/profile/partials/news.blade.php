<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        #app {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .card {
            width: 300px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 100%;
            height: auto;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #35a7ff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #38618c;
        }

        .loading {
            font-size: 1.25rem;
            text-align: center;
            padding: 20px;
        }

        @media screen and (max-width: 768px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>
@include('layouts.navigation')
    <div id="app">
        <template>
            <div>
                <div v-for="article in articles" :key="article.id" class="card">
                    <img :src="article.image" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">{{ article.title }}</h5>
                        <p class="card-text">{{ article.excerpt }}</p>
                        <a :href="article.link" class="btn">Lire la suite <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div v-if="loading" class="loading">Chargement...</div>
            </div>
        </template>
    </div>
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    articles: [],
                    currentPage: 1,
                    loading: false
                };
            },
            mounted() {
                this.loadArticles();
                window.addEventListener('scroll', this.handleScroll);
            },
            destroyed() {
                window.removeEventListener('scroll', this.handleScroll);
            },
            methods: {
                async loadArticles() {
                    try {
                        this.loading = true;
                        // Utilisez l'URL appropriée pour récupérer les articles paginés du serveur
                        const response = await axios.get(`/articles?page=${this.currentPage}`);
                        this.articles = this.articles.concat(response.data.data);
                        this.currentPage++;
                    } catch (error) {
                        console.error('Erreur lors du chargement des articles', error);
                    } finally {
                        this.loading = false;
                    }
                },
                handleScroll() {
                    const bottomOfWindow = document.documentElement.scrollTop + window.innerHeight === document.documentElement.offsetHeight;
                    if (bottomOfWindow && !this.loading) {
                        this.loadArticles();
                    }
                }
            }
        });
    </script>
</body>

</html>
