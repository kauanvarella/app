pipeline {
    agent { dockerfile true }
    stages {       
        stage('Deploy da aplicacao') {
            steps {
                sh 'chmod 600 ssh-prod-meuapp.pem'
                copy(file:"/www", tofile:"./")
                ansiblePlaybook credentialsId: 'private-key', disableHostKeyChecking: true, installation: 'ansible', inventory: 'hosts.inv', playbook: 'playbook.yml'                                    
            }
        }
        // stage('Teste2') {
        //     steps {
              
        //     }
        // }    
    }
}