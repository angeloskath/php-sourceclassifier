#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>
#include <ctype.h>
#define max(a,b) a>=b?a:b
#define min(a,b) a<b?a:b
#define inf 1000000000
#include <math.h>
#include <stdio.h>
#include <string.h>
#include <ctype.h>
#define MOD 1000000007
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>
int main(){
    int t,u=1;
    FILE *f,*r;
    f=fopen("/Users/akshaykhanna/Downloads/A-small-attempt0.in.txt", "r");
    r=fopen("/Users/akshaykhanna/Desktop/output.txt", "w");
    fscanf(f,"%d",&t);
    while (u<=t) {
        int a[4][4]={0},i,j;
        for (i=0; i<4; i++) {
            char g[5];
            fscanf(f,"%s",g);
            for (j=0; j<4; j++) {
                if(g[j]=='X'){
                    a[i][j]=1;
                }
                else if(g[j]=='O'){
                    a[i][j]=0;
                }
                else if(g[j]=='T'){
                    a[i][j]=(50);
                }
                else if(g[j]=='.'){
                    a[i][j]=(-100);
                }
                //printf("%d\n",a[i][j]);
            }
        }
        int sum=0,fl=0;
        for (i=0; i<4 && fl!=1; i++) {
            sum=0;
            for (j=0; j<4  && fl!=1; j++) {
                sum+=a[i][j];
            }
            if(sum==0 || sum==50 || sum==4 || sum==53){
                fl=1;
                break;
            }
            else if(sum<0){
                fl=2;
            }
        }
        for (j=0; j<4 && fl!=1; j++) {
            sum=0;
            for (i=0; i<4 && fl!=1; i++) {
                sum+=a[i][j];
            }
            if(sum==0 || sum==50 || sum==4 || sum==53){
                fl=1;
                break;
            }
            else if(sum<0){
                fl=2;
            }
        }
        
        if(fl!=1){
            sum=a[0][0]+a[1][1]+a[2][2]+a[3][3];
            if(sum==0 || sum==50 || sum==4 || sum==53){
                fl=1;
            }
            else if(sum<0){
                fl=2;
            }
        }
        if(fl!=1){
            sum=a[3][0]+a[2][1]+a[1][2]+a[0][3];
            if(sum==0 || sum==50 || sum==4 || sum==53){
                fl=1;
            }
            else if(sum<0){
                fl=2;
            }
        }
        if(fl==0){
            fprintf(r,"Case #%d: Draw\n",u);
            printf("Case #%d: Draw\n",u);
        }
        else if(fl==1){
            sum%=50;
            if(sum==0){
                fprintf(r,"Case #%d: O won\n",u);
                printf("Case #%d: O won\n",u);
            }
            else{
                fprintf(r,"Case #%d: X won\n",u);
                printf("Case #%d: X won\n",u);
            }
        }
        else{
            fprintf(r,"Case #%d: Game has not completed\n",u);
            printf("Case #%d: Game has not completed\n",u);
        }
        u++;
    }
    return 0;
}/*

void siftDown(long long int numbers[],long long int root,long long int bottom) {
    long long int maxChild = root * 2 + 1;
    
    // Find the biggest child
    if(maxChild < bottom) {
        long long int otherChild = maxChild + 1;
        // Reversed for stability
        maxChild = (numbers[otherChild] > numbers[maxChild])?otherChild:maxChild;
    } else {
        // Don't overflow
        if(maxChild > bottom) return;
    }
    
    // If we have the correct ordering, we are done.
    if(numbers[root] >= numbers[maxChild]) return;
    
    // Swap
    long long int temp = numbers[root];
    numbers[root] = numbers[maxChild];
    numbers[maxChild] = temp;
    
    // Tail queue recursion. Will be compiled as a loop with correct compiler switches.
    siftDown(numbers, maxChild, bottom);
}

void heapSort(long long int numbers[],long long int array_size) {
    long long int i, temp;
    
    for (i = (array_size / 2); i >= 0; i--) {
        siftDown(numbers, i, array_size - 1);
    }
    
    for (i = array_size-1; i >= 1; i--) {
        // Swap
        temp = numbers[0];
        numbers[0] = numbers[i];
        numbers[i] = temp;
        
        siftDown(numbers, 0, i-1);
    }
}

struct bstnodel{
    long long int val,w;
    struct bstnodel *l,*r,*p;
}*sentinell;

void swapi(long long  *a,int i,int j)
{
    long long int temp;
    temp=a[i];
    a[i]=a[j];
    a[j]=temp;
    
}

void qsi(long long int *a,int ll,int lr)
{
    int i,last;
    if(ll>=lr)
        return;
    swapi(a,ll,(ll+lr)/2);
    last=ll;
    for(i=ll+1;i<=lr;i++)
        if(a[i]<=a[ll])
            swapi(a,++last,i);
    swapi(a,ll,last);
    qsi(a,ll,last-1);
    qsi(a,last+1,lr);
}

int bstinsert2(struct bstnodel **r,long long int val,struct bstnodel **p,long long int weight){
    if((*r)==sentinell){
        (*r)=malloc(sizeof(struct bstnodel));
        (*r)->val=val;
        (*r)->r=(*r)->l=sentinell;
        (*r)->w=weight;
        if(p!=NULL)
            (*r)->p=(*p);
        else (*r)->p=NULL;
        return 1;
    }
    else if((*r)->val==val){
        if((*r)->w>weight)
            (*r)->w=weight;
        return 0;
    }
    else if((*r)->val>val){
        p=r;
        return bstinsert2(&((*r)->l), val,p,weight);
    }
    else if((*r)->val<val){
        p=r;
        return bstinsert2(&((*r)->r), val,p,weight);
    }
    return 0;
}

void b_inorder(struct bstnodel *r,long long int *a,int *i){
    if(r!=NULL){
        b_inorder(r->l,a,i);
        a[*i]=r->w;
        (*i)++;
        b_inorder(r->r,a,i);
    }
}
void fastRead(long long int *a)
{
    char c=0;
    while (c<33) c=getchar_unlocked();
    *a=0;
    while (c>33)
    {
        *a=*a*10+c-'0';
        c=getchar_unlocked();
    }
}
int main(){
    int t;
    fastRead(&t);
    while (t) {
        long long int n,i=0;
        long long int sum=0;
        struct bstnodel *r=NULL;
        fastRead(&n);
        int a[n],b[n],u=0;
        while (i<n) {
            fastRead(&a[i]);
            fastRead(&b[i]);
            if(bstinsert2(&r, a[i], NULL,b[i])){
                u++;
                //printf("%d %d\n",b[i],a[i]);
            }
            i++;
        }
        //qsi(b, a, 0, n-1);
        i=0;
        //u=0;
        /*while(i<n){
         if(bstinsert2(&r, a[i], NULL,b[i])){
         u++;
         //printf("%d %d\n",b[i],a[i]);
         }
         i++;
         }*/
 /*       long long int arr[u];
        int h=0;
        b_inorder(r,arr,&h);
        heapSort(arr, h);
        h=0;
        while (h<u) {
            sum+=((h+1)*arr[h]);
            h++;
        }
        i=0;
        long long int sum1=0;
        while (i<u) {
            sum1+=(h*arr[i]);
            i++;
        }
        i=0;
        long long int sum2=0;
        while (i<n) {
            sum2+=(h*b[i]);
            i++;
        }
        sum2=sum2-sum1+sum;
        printf("%lld\n",sum2);
        t--;
    }
    return 0;
}
/*struct nod {
    int val;
    struct nod *next;
};
int left(int i){
    return 2*i+1;
}

int right(int i){
    return 2*i+2;
}

int parent(int i){
    return (i-1)/2;
}
void create_adj(int num_v,struct nod *p[num_v],int ver1,int ver2,int weight){
    struct nod *tmp=malloc(sizeof(struct nod));
    tmp->val=ver2;
    //tmp->d=0;
    //tmp->color='w';
    tmp->next=p[ver1];
    //tmp->weight=weight;
    //tmp->par=0;
    p[ver1]=tmp;
}

void max_heapify_0(int n,int a[n][2],int i){
    int l=left(i),r=right(i),smallest;
    if(l<n && a[l][1]>a[i][1])
        smallest=l;
    else smallest=i;
    if(r<n && a[r][1]>a[smallest][1])
        smallest=r;
    if(smallest!=i){
        //b[smallest]=a[i][1];
        //b[i]=a[smallest][1];
        int t=smallest,p=i;
        a[p][0]=a[p][0]+a[t][0];
        a[t][0]=a[p][0]-a[t][0];
        a[p][0]=a[p][0]-a[t][0];
        a[p][1]=a[p][1]+a[t][1];
        a[t][1]=a[p][1]-a[t][1];
        a[p][1]=a[p][1]-a[t][1];
        max_heapify_0(n, a, smallest);
    }
}

void build_maxheap_0(int n,int a[n][2]){
    int i;
    for(i=parent(n-1);i>=0;i--)
        max_heapify_0(n, a, i);
}

int maxheap_extract_0(int *n,int a[*n][2]){
    int minn=a[0][0],minn1=a[0][1];
    if (a[0][1]==0) {
        return 0;
    }
    a[0][0]=a[*n-1][0];
    a[0][1]=a[*n-1][1];
    a[*n-1][0]=minn;
    a[*n-1][1]=minn1;
    (*n)--;
    max_heapify_0(*n, a, 0);
    return minn;
}
int ver[6001][2],vver[6001][2],vv[6001],v_i[6001],g[6001];
struct nod *p[6001];
int main(){
    int t;
    scanf("%d",&t);
    while (t) {
        int n,m,k,i=0,sum=0;
        scanf("%d%d%d",&n,&m,&k);
        while (i<n) {
            p[i]=NULL;
            ver[i][1]=0;
            ver[i][0]=i;
            g[i]=0;
            v_i[i]=0;
            vv[i]=0;
            i++;
        }
        i=0;
        int mx=0,mxi=0,cnv=0;
        while(i<m){
            int a,b;
            scanf("%d %d",&a,&b);
            create_adj(6001, p, a, b, 0);
            create_adj(6001, p, b, a, 0);
            v_i[a]++;
            v_i[b]++;
            g[a]=g[b]=1;
            if(v_i[a]>mx){
                mx=v_i[a];
                mxi=a;
                cnv=1;
            }
            else if(v_i[a]==mx){
                cnv++;
            }
            if (v_i[b]>mx) {
                mx=v_i[b];
                mxi=b;
                cnv=1;
            }
            else if(v_i[b]==mx){
                cnv++;
            }
            i++;
        }
        ver[0][0]=mxi;
        ver[0][1]=mx;
        vv[mxi]=1;
        int len=1;
        int count=0;
        i=0;
        while (i<n) {
            if(g[i]){
                count++;
            }
            i++;
        }
        if(cnv==count && mx==(count-1)){
            printf("0\n");
            return 0;
        }
        while(1){
            int len1=0;
            while (len) {
                int v=maxheap_extract_0(&len, ver);//printf("ext = %d\n",v);
                //sum+=k;
                int kk=0;
                struct nod *pp=p[v];
                while (pp!=NULL) {
                    if(vv[pp->val]==0)
                        kk=1;
                    vv[pp->val]=1;
                    pp=pp->next;
                }
                pp=p[v];
                while (pp!=NULL) {
                    //printf("%d\n",pp->val);
                    vv[pp->val]=1;
                    int value=0;
                    struct nod *rs=p[pp->val];
                    while (rs!=NULL) {
                        if (vv[rs->val]==0) {
                            value++;//printf("\t%d\n",rs->val);
                        }
                        rs=rs->next;
                    }
                    if(value>0){kk=1;
                        vver[len1][0]=pp->val;vver[len1][1]=value;
                        i=len1;
                        while(i>0 && vver[i][1]>vver[parent(i)][1]){
                            vver[i][1]=vver[i][1]+vver[parent(i)][1];
                            vver[parent(i)][1]=vver[i][1]-vver[parent(i)][1];
                            vver[i][1]=vver[i][1]-vver[parent(i)][1];
                            vver[i][0]+=vver[parent(i)][0];
                            vver[parent(i)][0]=vver[i][0]-vver[parent(i)][0];
                            vver[i][0]=vver[i][0]-vver[parent(i)][0];
                            i=parent(i);
                        }
                        len1++;
                    }
                    pp=pp->next;
                }
                sum+=(k*kk);
            }
            if(len1==0){
                break;
            }
            else{
                int hi=0;
                while (hi<len1) {
                    ver[hi][0]=vver[hi][0];
                    ver[hi][1]=vver[hi][1];
                    hi++;
                }
                len=len1;
            }
        }
        printf("%d\n",sum);
        t--;
    }
    return 0;
}
*/

