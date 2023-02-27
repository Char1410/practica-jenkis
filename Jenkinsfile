pipeline {
    agent any
    stages {
        stage("creacion del contenedor") {
            steps{
                script {
                    dockerCompose(
                    'up',
                    '-d'
                    )
                }
            }
        }

    }
}