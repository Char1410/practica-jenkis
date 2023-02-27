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

        stage("verificar docker") {
            steps{
                sh 'docker --version'
            }
        }

    }
}