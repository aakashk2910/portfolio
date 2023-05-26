# Important commands

- [Kubectl](#kubectl)
    - [Cluster Management](#cluster-management)
    - [Workload Management](#workload-management)
    - [Interacting with Pods](#interacting-with-pods)
    - [Confuration Management](#confuration-management)
    - [Troubleshooting and Debugging](#troubleshooting-and-debugging)
    - [Security and Authentication](#security-and-authentication)
- [Amazon EKS](#amazon-eks)
    - [Cluster Management](#cluster-management-1)
    - [Node Group Management](#node-group-management)
    - [Authenticating with EKS](#authenticating-with-eks)
- [Amazon ECR](#amazon-ecr)
    - [Repository Management](#repository-management)
    - [Image Management](#image-management)
    - [Authentication with ECR](#authentication-with-ecr)
- [Docker Command](#docker-command)
    - [Conatiner Management](#conatiner-management)
    - [Image Management](#image-management-1)
    - [Network Management](#network-management)
    - [Volume Management](#volume-management)
    - [System Management](#system-management)

## Kubectl

### Cluster Management
- Get cluster information:
```javascript
kubectl cluster-info
```
- List all nodes: 
```javascript
kubectl get nodes
```
- List all namespaces: 
```javascript
kubectl get namespaces
```
- Describe a specific node: 
```javascript
kubectl describe node <node-name>
```
- Describe a specific namespace: 
```javascript
kubectl describe namespace <namespace-name>
```
- Display resource usage of nodes:
```javascript
kubectl top node
```
- Display resource usage of pods: 
```javascript
kubectl top pod
```

### Workload Management
- List all pods: 
```javascript
kubectl get pods
```
- Describe a specific pod: 
```javascript
kubectl describe pod <pod-name>
```
- List all deployments: 
```javascript
kubectl get deployments
```
- Describe a specific deployment: 
```javascript
kubectl describe deployment <deployment-name>
```
- List all replicasets: 
```javascript
kubectl get replicasets
```
- Describe a specific replicaset: 
```javascript
kubectl describe replicaset <replicaset-name>
```
- List all services: 
```javascript
kubectl get services
```
- Describe a specific service: 
```javascript
kubectl describe service <service-name>
```

### Interacting with Pods
- Execute a command inside a pod: 
```javascript
kubectl exec -it <pod-name> -- <command>
```
- Stream logs from a pod: 
```javascript
kubectl logs -f <pod-name>
```
- Port-forward to a pod: 
```javascript
kubectl port-forward <pod-name> <local-port>:<pod-port>
```

### Configuration Management
- Create or apply a configuration: 
```javascript
kubectl apply -f <file-name>
```
- Delete a resource: 
```javascript
kubectl delete <resource-type> <resource-name>
```
- Edit a resource: 
```javascriptkubectl edit <resource-type> <resource-name>
```

### Troubleshooting and Debugging
- Describe a specific event: 
```javascript
kubectl describe event <event-name>
```
- Get logs for a previous instance of a pod:
```javascript
kubectl logs <pod-name> --previous
```
- List all persistent volumes: 
```javascript
kubectl get pv
```
- Describe a specific persistent volume: 
```javascript
kubectl describe pv <pv-name>
```
- List all persistent volume claims: 
```javascript
kubectl get pvc
```
- Describe a specific persistent volume claim: 
```javascript
kubectl describe pvc <pvc-name>
```

### Security and Authentication
- Create a secret: 
```javascript
kubectl create secret <secret-type> <secret-name> --from-literal=<key>=<value>
```
- List all secrets: 
```javascript
kubectl get secrets
```
- Describe a specific secret: 
```javascript
kubectl describe secret <secret-name>
```
- Create a service account: 
```javascript
kubectl create serviceaccount <service-account-name>
```
- List all service accounts: 
```javascript
kubectl get serviceaccounts
```


## Amazon EKS

### Cluster Management
- Create an EKS cluster: 
```javascript
aws eks create-cluster --name <cluster-name> --role-arn <role-arn> --resources-vpc-config subnetIds=<subnet-ids>,securityGroupIds=<security-group-ids>
```
- Update an EKS cluster configuration: 
```javascript
aws eks update-cluster-config --name <cluster-name> --role-arn <role-arn> --resources-vpc-config subnetIds=<subnet-ids>,securityGroupIds=<security-group-ids>
```
- Delete an EKS cluster: 
```javascript
aws eks delete-cluster --name <cluster-name>`
- Describe an EKS cluster: `aws eks describe-cluster --name <cluster-name>
```

### Node Group Management
- Create an EKS node group: 
```javascript
aws eks create-nodegroup --cluster-name <cluster-name> --nodegroup-name <nodegroup-name> --node-role <node-role-arn> --subnet-ids <subnet-ids> --instance-types <instance-types> --disk-size <disk-size> --scaling-config minSize=<min-size>,maxSize=<max-size>,desiredSize=<desired-size>
```
- Update an EKS node group: 
```javascript
aws eks update-nodegroup-config --cluster-name <cluster-name> --nodegroup-name <nodegroup-name> --scaling-config minSize=<min-size>,maxSize=<max-size>,desiredSize=<desired-size>
```
- Delete an EKS node group: 
```javascript
aws eks delete-nodegroup --cluster-name <cluster-name> --nodegroup-name <nodegroup-name>
```
- Describe an EKS node group: 
```javascript
aws eks describe-nodegroup --cluster-name <cluster-name> --nodegroup-name <nodegroup-name>
```

### Authenticating with EKS
- Configure kubectl for EKS cluster: 
```javascript
aws eks update-kubeconfig --name <cluster-name>
```

## Amazon ECR

### Repository Management
- Create an ECR repository: 
```javascript
aws ecr create-repository --repository-name <repository-name>
```
- Describe an ECR repository: 
```javascript
aws ecr describe-repositories --repository-names <repository-name>
```
- List ECR repositories: 
```javascript
aws ecr describe-repositories
```
- Delete an ECR repository: 
```javascript
aws ecr delete-repository --repository-name <repository-name> --force
```

### Image Management
- Push an image to ECR repository: 
```javascript
aws ecr put-image --repository-name <repository-name> --image-tag <image-tag> --image-manifest <image-manifest>
```
- List images in ECR repository: 
```javascript
aws ecr list-images --repository-name <repository-name>
```
- Delete an image from ECR repository: 
```javascript
aws ecr batch-delete-image --repository-name <repository-name> --image-ids imageTag=<image-tag>
```

### Authentication with ECR
- Get ECR registry login command: 
```javascript
aws ecr get-login-password --region <region> | docker login --username AWS --password-stdin <registry-url>
```

## Docker Commands

### Container Management

- List running containers: 
```javascript
docker ps
```

- List all containers (including stopped ones): 
```javascript
docker ps -a
```

- Start a container: 
```javascript
docker start <container-name>
```

- Stop a running container: 
```javascript
docker stop <container-name>
```

- Restart a container: 
```javascript
docker restart <container-name>
```

- Remove a container: 
```javascript
docker rm <container-name>
```

- Pull an image from Docker Hub: 
```javascript
docker pull <image-name>
```

- Build an image from a Dockerfile: 
```javascript
docker build -t <image-name> <path-to-dockerfile>
```

- Execute a command inside a running container: 
```javascript
docker exec -it <container-name> <command>
```

### Image Management

- List downloaded images: 
```javascript
docker images
```

- Remove an image: 
```javascript
docker rmi <image-name>
```

- Tag an image: 
```javascript
docker tag <source-image> <target-image>
```

- Push an image to Docker Hub: 
```javascript
docker push <image-name>
```

- Create a new image from a container's changes: 
```javascript
docker commit <container-name> <new-image-name>
```

### Network Management

- List networks: 
```javascript
docker network ls
```

- Create a network: 
```javascript
docker network create <network-name>
```

- Connect a container to a network: 
```javascript
docker network connect <network-name> <container-name>
```

- Disconnect a container from a network: 
```javascript
docker network disconnect <network-name> <container-name>
```

### Volume Management

- List volumes: 
```javascript
docker volume ls
```

- Create a volume: 
```javascript
docker volume create <volume-name>
```

- Inspect a volume: 
```javascript
docker volume inspect <volume-name>
```

- Remove a volume: 
```javascript
docker volume rm <volume-name>
```

### System Management

- Show Docker system information: 
```javascript
docker info
```

- Display container logs: 
```javascript
docker logs <container-name>
```

- Monitor resource usage of containers: 
```javascript
docker stats
```

- Remove all stopped containers: 
```javascript
docker container prune
```

- Remove all unused images: 
```javascript
docker image prune
```

- Remove all unused volumes: 
```javascript
docker volume prune
```
