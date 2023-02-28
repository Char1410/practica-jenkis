pipeline {
    agent docker
    stages {
        stage("creacion del contenedor") {
            steps{
                sh 'docker-compose up'
            }
        }

    }
}
