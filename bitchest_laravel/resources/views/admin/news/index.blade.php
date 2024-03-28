<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBOARD</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>

<body>
    <div id="app">
        <template>
            <div>
                <div v-for="article in articles" :key="article.id" class="card">
                    <img :src="article.image" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">{{ article.title }}</h5>
                        <p class="card-text">{{ article.excerpt }}</p>
                        <a :href="article.link" class="btn btn-primary">Lire la suite</a>
                    </div>
                </div>
                <div v-if="loading">Chargement...</div>
            </div>
        </template>
    </div>

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