# LaravelPractice
Laravelフレームワークを習うための練習

2월 6일Laravel 설치

Brew(패키지 다운로드) 설치
 $ ruby --version # ruby 2.x
 $ ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

PHP install 및 mysql install
$ brew install php
$ brew install mysql

PHP install 및 mysql install 확인
$ php --version # 5.6.xx
$ mysql --version # 5.5.xx

라라벨 설치 확인 전 필요한 PHP 설정
라라벨을 설치하려는 개발환경 또는 서버가 아래 필요사항을 충족하는 지 확인한다.
* php 5.5.9 이상
* php Extensions
    * OpenSSL
    * PDO
    * Mbstring
    * Tokenizer

$ php --version # PHP 5.6.xx
$ php -m | grep 'openssl\|pdo\|mbstring\|tokenizer'

Composer 설치
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
$ composer --version # Composer version 1.xx

라라벨 인스톨러 다운
$ composer global require "laravel/installer=~1.1"

laravel과 homestead 코맨드를 어디서든 접근할 수 있게 경로 설정하자.
# 터미널에 익숙치 않은 분이 많아 자세히 쓴다.

# 자신이 사용하는 콘솔에 따라 프로파일 이름이 다를 수 있다. ~/.profile, ~/.bash_profile, ~/.zshrc, ...
# On My Zshell을 설치했다면 ~/.zshrc 이다.
$ nano ~/.zshrc

# 아래와 같이 써진 줄을 찾아 맨 끝에 :$HOME/.composer/vendor/bin 을 추가하자.
export PATH="$PATH:$HOME/.composer/vendor/bin"

# 쇠뿔도 단김에 앞으로 자주 쓰게 될 artisan 코맨드의 별명을 등록해 놓자.
# 앞으로 자주 쓰게될 php artisan 대신 artisan 만 치면 된다.
# 열린 파일 맨 끝에 써 넣는다.
alias artisan="php artisan"

# ctrl + x  -> Y -> enter 순으로 눌러 수정 내용을 저장한다.
# 수정된 내용이 반영될 수 있도록 콘솔을 다시 시작하거나, 아래 코맨드를 실행한다.
$ source ~/.zshrc

# laravel 코맨드의 경로가 잘 설정되었는지 확인해 보자.
$ laravel --version # Laravel Installer version 1.x

라라벨 인스톨러로 라라벨 5를 설치하자.
$ laravel new myProject
$ cd myProject
$ php artisan --version # Laravel Framework version 5.x
$ chmod -R 777 storage bootstrap/cache

라라벨 시작
# 로컬 서버를 부트한다.
$ php artisan serve # 종료하려면 ctrl+c
# Laravel development server started on http://localhost:8000/

비밀번호 base64:Cgv4/1AJ4BfVrWujV6X0Xlx1hS1Qne8xknusqcI9axg=

라라벨 종료
CTRL + C

DB 시작/종료
Brew services start mysql
Brew services stop mysql



라라벨 폴더 구조
.
├── .env                              # 글로벌 설정 중 민감한 값, dev/production 등 앱 실행환경에 따라 변경되어야 하는 값을 써 놓는 곳
├── app
│   ├── Console                       
│   │   ├── Commands                  # 콘솔 코맨드 하우징
│   │   └── Kernel.php                # 콘솔 코맨드, 크론 스케쥴 등록
│   ├── Events                        # 이벤트 클래스 하우징
│   ├── Exceptions                    # Exception 하우징
│   │   └── Handler.php               # 글로벌 Exception 처리 코드
│   ├── Listeners                     # 이벤트 핸들러
│   ├── Jobs
│   ├── Policies
│   ├── Http                          # Http 요청 처리 클래스들의 하우징
│   │   ├── Controllers               # Http Controller
│   │   ├── Kernel.php                # Http 및 Route 미들웨어 등록
│   │   ├── Middleware                # Http 미들웨어 하우징
│   │   ├── Requests                  # Http 폼 요청 미들웨어 하우징
│   │   └── routes.php                # Http 요청 Url을 Controller에 맵핑시키는 규칙을 써 놓은 테이블
│   └── Providers                     # 서비스 공급자 하우징 (config/app.php에서 바인딩 됨)
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── EventServiceProvider.php  # 이벤트 리스너, 구독 바인딩
│       └── RouteServiceProvider.php  # 라우팅 바인딩 (글로벌 라우팅 파라미터 패턴 등이 등록되어 있음)
├── composer.json                     # 이 프로젝트의 Composer 레지스트리, Autoload 규칙 등이 담겨 있다. (c.f. Node의 package.json)
├── config                            # database, queue, mail 등 글로벌 설정 하우징
├── database
│   ├── migrations                    # 데이터베이스 스키마
│   └── seeds                         # 생성된 테이블에 Dummy 데이터를 삽입하는 클래스들 (개발 목적)
├── gulpfile.js                       # Elixir (프론트엔드 빌드 자동화) 스크립트
├── public                            # 웹 서버에 의해 지정된 Document Root
├── resources
│   ├── assets                        # JavaScript, CSS 하우징
│   ├── lang                          # 다국어 지원을 위한 언어 레지스트리 하우징
│   └── views                         # 뷰 파일 하우징
├── storage                           # Laravel5 파일 저장소
└── vendor                            # composer.json의 저장소


출처 : http://l5.appkr.kr/lessons/02-hello-laravel.html

=======================================
2월 7일 Laravel
 
1.Homestad 구동
1> Git Bash 실행				— terminal 실행
2> $cd ~/Homestad		— $cd ~/Documents/MyProject/Laravel/myProject
3> vargrant up				— $php artisan serve

2.Homestad 접속
1> $ vagrant 


*라라벨의 프레임워크에서 사용가능한 다양한 Helper Function 
 (도우미 함수 , 헬퍼 함수)
 -env() : .env파일에서 환경 변수 값을 읽어오는 함수

5.Laravel 설치 폴더 내의 config/App.php
“debug” => env(“App DEBUG“,false) -> true
“timezone” => “UTC” -> Asia/Seoul
“locale” => “en” -> “ko”

*Routing
-Regacy URL : index.php?action=view&article_id=123
-Pretty URL : /view/quick-start-manual
 RESTful 서비스의 핵심
-Laravel에서 Routing정보 처리
  routes/web.php
-먼저 정의 된 라우팅이 먼저 실행된다.

=======================================
2월 8일 Laravel 
도우미 함수 Helper Function
-response(): 실행 결과가 Response 객체
-view() : View 객체 반환

Response 객체에서 json()
- Route::get('test/json',function(){
-  $data = ['name' => 'JJG' , 'gender' => 'male'];
-  //express json in php
-  return response()->json($data);
- });


Heredoc
주소 : http://php.net/manual/kr/language.types.string.php
정리 해 둘 것
1. 띄어쓰기 금지

**Router와 View를 분리하기
	-라라벨에서 View를 작성해 두어야 하는 장소 : resources/views폴더
	-관례1 : view의 이름 -> 폴더이름.파일명
		  test.heredoc  -> view 폴더 내부 test/heredoc.php
		  heretic		   -> view 폴더 내부 heredoc.php

** Request URI에서 Route -> View로 값 전달하기
	-compect() 함수
	-with() 메소드

=======================================
2월 9일 Laravel 

View Template Engine : Blade
Blade : Laravel에서 제공하는 View Template Engine
특징 : 문법이 간단,배우기 용이
관례:  	1.파일명 : resources/vies/에서 일반 파일과 구분하기 위해
				 * 파일명.blade.php
				 전달 받은 값은 view 파일에서 {{ $var }}으로 사용
		2.XSS(cross site scripting)을 방지 : Sanitizing(소독)
		   htmlentities()
*CSRF : 	Cross-Site Request Forgery
			{{ csrf_field(); }}
			{{ method_filed(); }}
			
			Blade			 Legacy
			{{ $var }}  ==  <?php echo htmlentities($var); ?>
			{{{ $var }}} == <?php echo htmlentities($var); ?>
			{!! $var !!} == <?php echo $var; ?>
*도우미 함수
<<제어문>>
1)조건문
@if,@elseif,@else,@endif

if(!Auth::isSigned())
	echo “need Login”;
—> @unless(Auth::isSigned())
		echo “need Login”;
	 @endunless

2)반복문 : DB에서 가져온 데이터를 표시하기 위해서 주로 사용
@foreach,@for,@while

=======================================
2월 10일 Laravel

Layout 상속
-템블릿 template를 만들고 이를 다른 페이지에서 상속받아 뷰를 작성
-resources/views/layouts 폴더에 레이아웃 파일을 작성 해 둠
-resources/views/layouts 폴더에 main.blade.php
-@yield( ‘변수’ , ’디폴트 값’ )
	-자식 블레이드 파일에 구현을 양보한다는 의미
	-자식 블레이드 에서의 구현 -> @section(‘변수’)
	-@endsection , @extends를 이용하여 상속을 구현

  4. Service Provider, Facade
      a. 서비스 프로바이더, 파사드(표면, 허울)
      - 파사드: 표면적으로 서비스 프로바이더의 기능을 정적메소드 사용하는 것처럼 사용하게 해주는 기능
      b. 서비스 프로바이더
         i. 라라벨에서 부트스트래핑(Bootstraping)의 핵심
         ii. 등록된 프로바이더를 오토로딩함
         iii. config/app.php의 providers 항목에 등록
         iv. https://laravel.kr/docs/5.3/providers
      c. 파사드 
         i. 객체지향 디자인 패턴 중 하나로 복잡한 구현은 숨기고 간략한 API로 접근할 수 있도록 하는 것
         ii. 의존성 주입
   *패키지 검색 사이트 :https://packagist.org/
   5. artisan 명령어
   Ø 실행 : homestead에 ssh로 접속한 후
      ○ $cd Code/
      ○ $cd 라라벨프로젝트폴더명/
      ○ $cd Laravel
      ○ $php artisan ..~
         § 명령어 예시
         § command   [option]   []arguments
            Ø command 필수()
            Ø -name=value 형식
            Ø 필요한 매개변수 값
   Ø artisan을 이용한 클래스 생성: Scaffolding(스캐폴딩)
      ○ $php artisan make:…~
         § Controller 생성
            Ø $php artisan make:controller 컨트롤러명 (--resource)
            Ø app\Http\Controllers\ --> 해당 경로에 컨트롤러가 생성됨
         § Model 생성
            Ø $php artisan make:model 모델명 
            Ø app\ --> 해당 경로에 모델이 생성됨
         § Provider 생성
            Ø $php artisan make:provider 프로바이더명
            Ø app\Providers\ --> 해당 경로에 프로바이더가 생성됨
         § 관례 : 클래스 이름 등의 작성시 표기법
            Ø StudlyCaps : 단어 첫 글자는 대문자
            *camelCase : 단어 첫 글자는 대문자, 단 시작단어는 소문자로
            *snake-case : 단어 소문자, 단어와 단어는 - 연결
   Ø tinker
      ○ REPL 
         § Read - Eval - Print - Loop
         § 대화형 실행창(디버깅용)
         § Laravel용 REPL : tinker
            Ø 실행  : php artisan tinker
         *php 인터프리터 실행 REPL : $php -a
   6. Controller 작성
      a. -request(입력된 정보)를 처리하여 Model을 호출하고 그 결과를 처리해 View생성을 하도록 하는 역할
      b. Controller 종류
         i. Plain Controller
            1) 일반적인 컨트롤러...메소드 구현
            2) 라우팅으로 메소드를 호출할 수 있도록 설정
            3) 생성
               a) php artisan make:controller 컨트롤러명 
               b) 생성된컨트롤러.php 파일에 Method명()를 구현 
               c) web.php에 라우팅 등록 : get('경로','컨트롤러명@Method명');
            4) Plain Controller 에서 값 전달 받기
               a) web.php에 라우팅 등록 : get('경로/{var?}','컨트롤러명@Method명');
               b) 컨트롤러의 method의 매개변수에 var 매개변수 정의
            5) HTTP Request클래스 활용 Plain Controller 개발
               a) controller의 action 매개변수에 request $변수명으로 매개변수 받아오기 가능
         ii. Resource Controller
            1) RESTful 서비스를 위한 것
            2) RESTful : REprensentational State Transfer full-fill
            3) $php artisan make:controller 컨트롤러명 --resource
            4) Request의 header
               a) Post   /order    201 Created {"id" : 1}
               method   URL   MESSAGE
         iii. 디버깅 코드
            1) var_dump()
            2) dump()
            3) dd()
         iv. Controller Namespace
            1) app\Http\Controller 루트네임스페이스
            2) Routing 
               a) route::get('admin/create', 'Admin\Register@create);
            3) controller 생성 명령
               a) $php artisan make:controller Admin/Register
   *RESTful Resource Controller Routing      					

=======================================
2월 13일 Laravel

*RESTful Resource Controller Routing      					
1. Resource Controller 생성 $php artisan make:comtroller RestTestController —resource 
2. Routing 설정(route/web.php) Route::resource(‘resttest’,’RestTestController’); 
3. Middleware -라라벨 4 이전 버전에서는 Filter -사용자의 요청(Request)에 대해 먼저 서비스보다 먼저 실행됨 -user-middleware-server -사용 예 : 로그인 체크 -미들웨어를 사용하여 개발 : 로그인 체크 미들웨어를 개발하고 미들웨어 소스코드 내에서                                           로그인 안되어 있으면  로그인 페이지로 리 다이렉트                                          로그인 되어있으면 요청한 페이지로 이동시킴 -설정확인 : app/Http/Middleware 폴더내에 있고 -설정 : app/Http/Kernel.php 파일 내에 있음 -장점  1. 서비스보다 집중하여 개발할 수 있다. 2. 공동처리 로직을 구현하면 어플리케이션을 수정하지 않아도 비지니스 로직에 집중할 수 있다 => 개발 생산성 향산 , 유지보수성 향상    -단점  1. 수행속도가 늦어짐 2. 서버 하드웨어 용량의 증설 , 물리적 서버 대수를 추가           
4. 미들웨어 사용 Route::group('middleware' => ['web','my-middleware'],function(){  Route::resource('test','TestController’);  }); 
5. VerifyCsrfToken 미들웨어 사이트간 요청 위조 (CSRF or XSRF) Cross-Site Request Foregy를 방지하기 위한 미들웨어 PUT,POST,PATCH,DELETE 요청에 대해서 자동으로 실행되는 미들웨어 
6. DB Margration -DB의 처리    DATA 처리    CRUD(Crate - Read - Update - Delete) -DB Schema를 SQL(DDL)    개별 개발자가 변경된 Schema의 반영 여부를 학인할 수 없음 -Laravel에서는 migration을 이용해서 table의 버전관리    migration 이라고 하는 table이 존재 -목적 : 테이블 버전관리  1)migration 생성 $php artisan make :migration -h —create : migrate할 때 table todtjd —table : 기존 테이블의 수정시 ex>projects,taks 태이블 생성 관례 : 테이블 명은 복수형  1. php artisan make:migration create_projects_table —create=projects     php artisan make:migration create_task_table —create=tasks   -생성된 파일 : 생성날짜시간_migration이름.php(database/migration)  -StudlyCaps으로 migration이름의 클래스명이 존재  2.내용확인 up (): migration 수행 down() : migration 취소 컬럼생성 https://laravel.kr/docs/5.3/migrations@creating-colums 쿼리빌더 unsigned(),nullable(),default($value),first(),after(‘column name’) MySql한정             

=======================================
2월 14일 Laravel

Migration 취소
-$php artisan migrate:rollback —pretend
-migration 파일 내의 down() 실행
-$php artisan migrate:reset
-지금까지 실행했던 migration을 삭제
-$php artisan migration : refresh

Migration 통한 테이블 수정
1. migration파일 생성 년_월_일_시간_create_테이블명_table.php php artisan make:migration inc_name_and_rename_public_add_label_on_projects —table=projects;  
DB Seeding
-초기 DB 입력관리
-database/seeds 폴더에 생성되는데 schema명+Tableseeder.php로 생성   projects ==> ProjectTableSeeder.php;
1. Seeder 생성 php artisan make:seeder  UserTableSeeder php artisan make:seeder ProjectsTableSeeder php artisan make:seeder TasksTableSeeder 
2. 실행 php artisan db:seed(전체 실형) php artisan db:seed —class=UserTableSeeder 

=======================================
2월 15일 Laravel

<<Model Factory>>
Test data가 필요한 경우
-성능 테스트를 하기 위해 대규모의 중복되지 않은 정보를 얻기 위해
-작성된 쿼리 로직이 잘 작동되는지 확인하기 위해 
-검색조건을 사용할 수 있도록 고르게 분포된 데이터
-페이징 테스트를 위해 다양한 데이터

의미있는 테스트 데이터를 작성
-Faker 라이브러리 -database/factories/ModelFactory.php
-factory() 도우미 함수
-실행을 위해 tinker 실행
테스트용 factory(모델클래스이름 , 갯수)->maker()
Db입력용 : factory(모델클래스이름, 갯수)->create()

Elequent ORM
-ORM = Object-Relational Mapping
-Model과 관련
-CoC(Convention Over Configuration) : 설정 위에 관례 , 설정 보다 관례
-설정은 최소화,가능하면 관례로

<대표적인 관례>
1. Model 클래스의 이름: Table명을 StudlyCaps 형식으로 하고 Table명의 단수형 Model 명(StudlyCaps)               Table 명(snake case) Task                                            tasks PasswordReset.                         password_reset 
2. DB연결정보 : config/database.php 
3. 기본키(primary key)는 디폴트 필드명 : id
4. 모든 테이블에는 created_at , updated_at 필드가 존재 $table->timestamps() created_at = 레코드 생성일자 시간 updated_at = 레코드 최종 0.수정,변경 일자 시간
5. DateTime의 형식:날짜 시간(2015-11-03 06:52:59) 
관례깨기 - 권장하지 않음
1. 모델의 이름 Class Task extends Model{  protected $table = ‘my_task_table’; } 
2. DB 연결정보 Class Task extends Model{ protected $connection = ‘sqlite’; } 
3. 기본 키 Class Task extends Model{ protected $primarykey = ‘task_id’; } 
4.  1. created_at , updated_at 사용하지 않기 Class task extends Model{ public $timestamps = ‘false’; }  2.별도의 DateTime을 사용하고싶다면 Class Task extends Model{ protected $dates = [‘due_date’ , ’task_date’]; }  3.Default Field 명을 사용 안하려면 Class Task extends Model{ const CREATED_AT = ‘created_rec’; const UPDATED_AT = ‘modify_rec’; } 
5. DateTime 형식 바꾸기 Class Task extends Model{ protected $dateFormat = “Y-m-d H:i:s”; }

=======================================
2월 16일 Laravel

<<CRUD>>
1. Controller 생성  php artisan make:controller OrmTestcontroller --resource 
2. Routing 설정 Route::resource (‘ormtest’,’OrmTestController’); 
    1. 모델 검색(Read) - 결과는 Collection (Java : map(hash map) , set(hash set) , list(hash list)) 1. 모든 데이터 읽기 - 모델명:all() //모델명 —> 모델명의 테이블 이름(select * from 모델명s)  2.하나의 데이터 읽기  - 모델명::find($id);  // primary key, 없으면 null 처리 //select * from 모델명s where id = $id; -모델명::findOrFail($id) //없으면 예외 발생  3.Aggregate 함수 집계 : count(),sum(),avg(),max(),min 등등 $count = Project::counte(); $sum = Task::sum(‘id’); //id 필드의 값을 합산 $avg = Task::avg(‘id’); //id 필드의 값의 평균을 출력 $max = Task::max(‘id’); //가장 높은 id 필드를 출력 $min = Task::min(‘id’); //가장 낮은 id 필드을 출력  4.where() 메소드, orWhere() 함수 $max = Task::where(‘created_at’ , ’>’ , \Carbon::now()->subDays(7))->max(‘id’); //select max(id) from tasks where created_at > 현재날짜 -7일  5.where + 조건문 이름의 메소드들 whereIn(), whereNot(), whereBetween(), whereNotBetween()  public function whereTest(){  $tasks = Task::whereIn(‘id’,[3,4,5])->get();  //id field 값이 3,4,5인 레코드 반환   $tasks = Task::whereNot(‘id’,[3,5,7])->get();  //id field 값이 3,5,7이 아닌 값을 반환   $tasks = Task::whereBetween(‘id’,[3,9])->get();  //id field 값이 3~9인 레코드를 반환   return response()->json($tasks,200,[],JSON_PRETTY_PRINT); }  6.orWhere() 사용법 -id가 10 또는 name이 ‘할’으로 시작하고 id가 3보다 크고 7보다 작은 레코드를 가져오기 public function getWhereTest(){  $tasks = Task::where(‘id’,’=’,’10’)->orWhere(function($query){       $query->where(‘name’ , ’like’ , ‘할%’)->where(‘id’ , ‘<’ , ‘7’)   });   return response()->json($tasks,200,[],JSON_PRETTY_PRINT); }  7.Exist() , NotExist() , Has() , NotHas() , having() , groupby() 
    2. 모델 삽입(insert) : CREATE save() 
    3. Update 1.find()후에 값 수정하고 save()   $task = Task::find($id)   $task->name = ‘Change Name’;   //etc   $ret = $task->save();  2.메소드 체이닝으로 update() 처리 public function update($id){   $param = [   'name' => 'Update Test',   'project_id' => 3,   'description' => 'Writing Update Test Example'   ];   $ret = Task::find($id)->update($param);    return view('Updated Successfully'); }  *Mass Assignment 
    4. Delete 1.delete() public function Delete($id){   $task = Task::find($id);   $ret = $task->delete();   return response()->...; }  2.destroy() public function destroy($id){   $ret = Task::destroy($id);   return response()->...; }  3.배열로 삭제 public function dDeleteArr($id){    $delArr = explode(',',$id);    $ret = Task::destroy($delArr); }  4.where를 이용한 삭제 public function dDeleteWhere($from,$to){    $ret = Task::where('id','>',$from)              ->where('id','<',$to)              ->delete(); }  *Soft Delete -SoftDeletes Trait 1. 테이블에 deleted_at 필드가 있어야함 $php artisan make:migration soft_delete_task_table --table=tasks  2.migration 파일에 $table->softDeletes(); 3.$php artisan migrate 4.Model에 use SoftDeletes trait 사용 시킴    dates변수에 deleted_at을 삽입    $php artisan make:model 모델명 5.task를 삭제 후 6.삭제한 결과조회   a.삭제하지 않은 레코드 + 삭제한 레코드      withTrashed()   b.삭제한 레코드만 조회      onlyTrashed() 7.복원(restore) : deleted_at의 필드 값을 null로 전환 8.Hard Delete : forceDelete() 강제적으로 삭제 시키는 방법 
    5. Query Scope : 자주 사용되는 쿼리 구문을 재사용 할수 있도록 하는 것 1. 쿼리 스코프 메소드 작성     scope+메소드 명()     ex)마감일이 7일 이내인 task 2.Controller에서 Scope빼고 다음문자를 소문자로 하는 메소드 명 호출    ex)scopeDueIn7Days() —> dueIn7Days() 
    6. 모델 이벤트(hooking) creating, created, updating, updated, saving, saved,  deleting, deleted, restoring,restored -ing : 실행 전 -ed : 실행 후  1.model 이벤트를 등록 app/Providers/AppServiceProvider.php boot() 메소드에 모델명::이벤트명의 메소드를 작성 
    7. Accessor & Mutator 접근자          변경자 접근자 : 모델에서 데이터를 가져올 때 자동으로 속정을 변환 하는 것 변경자 : 모델에 데이터를 저장할 때 자동으로 속정을 변환하는 것    

=======================================
2월 20일 Laravel
Accessor & Mutator접근자          
변경자접근자 : 모델에서 데이터를 가져올 때 자동으로 속정을 변환 하는 것
변경자 : 모델에 데이터를 저장할 때 자동으로 속정을 변환하는 것

1 app\provider\AppServiceProvider.php파일의 boot()
2 Mutator 작성
-적용할 필드명을 Test이라고 가정 , 모델 클래스 내부에 setTestAttribute()로 작성
-관례 : Mutator를 위한 메소드명은 set+StudlyCaps으로 표현된 필드명 + Attribute()
작성 : 
    public function setTestAttribute(){
      $this->attribute['test'] = \Crypt::encrypt($value);
    }
사용 : 
	$u = new App\Project;
   	$u->test = '12345';

3 Accessor 사용
	$u = \App\User::find();
	$user = $u->test;

모델클래스에 set—>get으로 변경한 메소드를 작성
setTestAttribute--->getTestAttribute
public function getTestAttribute($value){
      return \Crypt::decrypt($value);
    }

Table Relations
http://laravel.kr/docs/5.4/eloquent-relationships
ex>todo 서비스
user는 project를 여러개
project는 여러개의 task를 가질 수 있다.

-Eloquent에서는 관계를 메소드 형태로 정의
->Query Builder로 작성해서 사용
Ex)Project의 여러 task 중에서 상태가 종료인 데이터 검색하기
	$project->task()->where(‘status’ , ’done’)->get();

-관계
 1:1관계
 1:다
 다:다
 연결을 통한 다수관계
 다형성 관계 
 다:다 다형성 관계
1>one-to-one(1:1) 관계
-users 테이블과 profiles 테이블관계

	class User extends Model{
  		public function profile(){
    			return $this->hasOne(Profile::class);
 		 }
	}
	
	class Profile extends Model{
 		 public function user(){
    			return $this->belongsTo(User::class);
  		}
	}
관례 : 관계 맺고 있는 테이블의 이름을 관계메서드로 정의
관례 : 상호 외부키는 테이블 이름_id
-profile의 외부키가 user_id가 아닌 경우 
-ex)fk_user_id
	->return $this->belingsTo(User::class , ’fk_user_id’);
사용 
$profile = User::find(1)->profile;

2>one-to-many(1:*)
-하나의 프로젝트는 여러개의 tasks를 가진다.
HasMany($related,$foreignKey = null , $localKey = null)
	class Project extends Model{
		public function tasks(){
			return $this->hasMany(App\Task::class);
		}
	}			
	
	class Task extends Model{
		public function project(){
			return $this->belongsTo(Project::class);
		}
	}

3>many-to-many
Ex)users : roles
사용자  A : 편집 , 삭제 , 댓글 수정
게시글 삭제 : 사용자 A , B , C
hasManytoMany()메소드 없음

-pivot table을 사용
Ex) role_user을 사용
관례 : pivot 테이블명 - 대상되는 두 테이블의 알파벳 순으로 단수형 표현을 snake_case로 연결하여 정의(user_id , role_id가 참조키)

-many to many relation 정의
a>User 모델에 roles() 구현
	class User extends Model{
		public function roles(){
			return $this->belongsToMany(Role::class);
		}
	}

b>Role에도 users() 구현
	class Role extends Model{
		public function users(){
			return $this->belongsToMany(User::class);
		}
	}
c>Role 모델을 위해 Migration 작성
	php artisan make:migration create_role_table —create=role_user

d>Role 모델 생성
	php artisan make : model Role

e>피봇 테이블 생성
	php artisan make:migration create_role_user_table —create=role
$table->integer(‘user_id’)->unsigned();
$table->foreign(‘user_id’)->reference(‘id’)->on(‘users’);
$table->integer(‘role_id’)->unsigned();
$table->foreign(‘role_id’)->reference(‘id’)->on(‘roles’);
$table->unique([‘user_id’ , ’role_id’]);


f>migration 실행
	php artisan migrate

g>RoleUser 모델
	php artisan make:model RoleUser
	모델-테이블의 관계
	모델명->테이블명은 snake case + 복수형
	*모델에서 테이블명 따로 지정해 두어야함
	protected $table = ‘role_user’;

h>테스트 데이터 생성
ModelFactory 추가

I>모델 펙토리 실행
	php artisan tinker
	>>>factory(‘App\User’,10)->create() or make()
	>>>factory(‘App\Role,100)->create() or make()
	>>>factory(‘App\RoleUser’,100)->create() or make()

=======================================
2월 21일 Laravel

 4> Has Many Through(연결을 통한 다수 관계)
- users , projects : one : many
 Projects , tasks : one : many
 User와 tasks : hasManythrough

- hasManythrough(	$related , $trough 
						//가지고오려는 테이블 명
						//중간 단계의 역할을 하는 테이블 명
						, $firstKey = null , $secondKey = null 
						, $localKey = null)

- User 모델에서 tasks() 메소드를 구현하면 됨
 hasManyThrough(Task::class , Project::class)

5> 다형성 관계
- R-DB에서 표현하지 못하는 관계
Ex) users ,  pictures , products

User 모델 , Product 모델 : imageable 메소드를 사용
Picture 모델 소유하고 있는 상황

	product 구조
	imageable_id 	-	user_id 또는 product_id
	imageable_type	-	picture를 소유하고 있는 모델 명
	
a>migration
$php artisan make : migration create_product_table —create=products;
$php artisan make : migration create_picture_table —create=pictures;

b>migrate 실행
$php partisan migrate

c>모델 생성
$php artisan make : model Product
$php artisan make : modelPicture 
	
Class Picture extends model{
	public function Model
Public function imgable{

	}
}

Public function pictures(){
	return $this->morpMany(Picture::class , ’imageable’);
}

d>model Factory 정의
e>레코드 생성하기
$php artisan tinker

=======================================
2월 22일 Laravel
연관 모델
-참조 무결성(Reference Integrity)
R-DB에서 중요한 개념
데이터의 일관성을 보장해야 함

-Elequent에서 참조 무결성을 보장하기 위해서 CRUD 코드에 연관모델 정보를 추가하도록 되어있음

1> 연관모델을 삽입
-참조키 자동삽입
	task에 foreignKey (project_id)를 자동 설정 되도록
	Project 모델에 save()내에서 자동으로 project_id가 설정된 task를 저장할 수 있도록 한다.
$task = new App\Task([]);
$prj = App\Project::find(7);
$task = $prj->tasks()->save($task);

$tasks = [new App\Task(‘name’ => ‘example task1’) ,
			new App\Task(‘name’ => ‘example task2’) ,
			new App\Task(‘name’ => ‘example task3’) ,];
$prj = App\Project::find(3);
$tasks = $prj->task()->savemany($tasks);

-포함관계(BelongsTo) 갱신
	associate() 메소드 이용
	dissociate() 메소드 이용

-many to many 관계 삽입
	many to many 에제
	ex) users , roles
		user id 3인 사용자에게 role id가 7인
		역할 부여하는 예제
		attach()를 사용

	관계 제거 : detach()
	id가 2인 사용자의 role_id가 3인 것을 제거
	User::find(2)->role()->detach(3);
	
-task의 정보를 수정했다
	->tasks의 updated_at필드값이 수정됨
	->due_date
-one to many 관계에서
	부모자식
-자식 테이블의 수정은 부모테이블의 수정으로 반영될 필요가 있다.
-자식 테이블에서 touches 프로퍼티에 설정을 부모테이블로 해주면 자동으로 실행됨
-연관 모델의 삭제
	1> 자식을 먼저 삭제
		부모 삭제
		delete()
	2> 이벤트 처리
		부모 모델의 deleting 이벤트 처리 헨들러에서 자식 삭제 처리
	3> 삭제시 단계적으로 삭제하도록 cascade 옵션처리
		$table->foreign(‘project_id’)->references(‘id’)->on(‘projects’)
		->onDelete(‘cascade’);

<<TodoLog>>
1> Project 생성
	1> homestad.ymal 수정
		c:\User\사용자폴더 명 \.homestad.ymal
	2>hosts 파일에 추가
	192.168.10.10 yjctodo.app
	3> vagrant up
		vagrant ssh
		cd ~/Code
	4> larval new yjctodo
	5) Nignx 서버에 가상 호스트 등록
	$serve yjctodo.app /home/vagrant/Code/yjctodo/public
