#include<stdio.h>
int main(){
    int i,j,k,n;
    printf("enter no of process");
    scanf("%d",&n);
    int p[n],at[n], bt[n];
    int ct=0,tat[n],wt[n];
    float atat=0,awt=0;
    for(i=0;i<n;i++){
        printf("enter arrival time of process %d",i+1);
        scanf("%d",&at[i]);
        printf("enter burst time of process %d",i+1);
        scanf("%d",&bt[i]);
        p[i]=i+1;
    }
    for(i=0;i<n-1;i++){
        for(j=0;j<n-i-1;j++){
            if(at[j]>at[j+1]){
                int temp=at[j];
                at[j]=at[j+1];
                at[j+1]=temp;
                temp=bt[j];
                bt[j]=bt[j+1];
                bt[j+1]=temp;
                temp=p[j];
                p[j]=p[j+1];
                p[j+1]=temp;
            }
        }
    }
    
    for(i=0;i<n;i++){
        if(at[i]>ct){
            ct=at[i];
        }
        ct=ct+bt[i];
        tat[i]=ct-at[i];
        wt[i]=tat[i]-bt[i];
        printf("process % d has turn around time %d and waiting time %d\n",p[i],tat[i],wt[i]);
        atat=atat+tat[i];
        awt=awt+wt[i];

    }
    atat=atat/n;
    awt=awt/n;
    printf("Average turn around time is %2f",atat);
    printf("Average waiting time is %2f",awt);
    return 0;

}