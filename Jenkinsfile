pipeline {
  agent any
  stages {
    stage('Checkout Code') {
      steps {
        git(url: 'https://github.com/hightower9/laravel-company-api', branch: 'dev')
      }
    }

    stage('Log') {
      parallel {
        stage('Log') {
          steps {
            sh 'ls'
          }
        }

        stage('Composer') {
          steps {
            sh 'cd laravel-company-api && composer install'
          }
        }

      }
    }

  }
}