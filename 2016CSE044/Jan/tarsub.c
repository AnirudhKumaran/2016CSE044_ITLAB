#include<stdio.h>

void main(){

	int i,j,n,s,e,sum,t,a[10],f=0;

	printf("Enter the size : ");
	scanf("%d",&n);

	printf("Enter the elements : ");
	for(i=0;i<n;i++)
	scanf("%d",&a[i]);

	printf("Enter the target value : ");
	scanf("%d",&t);

	for(i=0;i<n;i++){
		s=i;
		sum=0;
		for(j=i;j<n;j++){
			sum = sum + a[j];
			if(sum==t){
			e=j;
			f=1;
			break;			
			}
		}
		if(f)
		break;
	}

	printf("Range : %d to %d.",s+1,e+1);
}
