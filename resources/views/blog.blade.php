<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <style>
        dialog::backdrop{
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(2px);
        }
        dialog::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
<header class=" py-4 px-10 shadow-sm">
    <nav class="flex gap-x-16 items-center">
        <h1 class="font-bold">
            <a href="{{route('index')}}">TechConnect</a>
        </h1>
        <div class="justify-between flex flex-1">
            <ul class="flex gap-x-8 items-center">
                <li>
                    <a href="{{route('explore-startups')}}">Explore Startups</a>
                </li>
                <li>Tech Corner</li>
                <li>
                    <a href="{{route('jobs')}}">Jobs</a>
                </li>
                <li>Career Hub</li>
                <li>Events</li>
                <li>Insights</li>
                <li>Pricing</li>
            </ul>
            <div class="flex gap-x-10">
                <button>Login</button>
                <button class="bg-green-700 text-white px-2 py-1 rounded-lg">Sign up</button>
            </div>
        </div>
    </nav>
</header>


<main class="max-w-3xl mx-auto mt-4">
    <div>
        <h1 class="text-4xl font-bold">
            ARUDEM Launches in Uganda, being the first industry game disraptor in 2025
        </h1>
    </div>
    <div class="flex items-center gap-x-3 border-b border-slate-200 py-5 mb-4">
        <div class="h-8 w-8 bg-yellow-600 rounded-full"></div>
        <div>
            <h4 class="font-medium text-sm">Ezra Obua</h4>
            <p class="-mt-1 text-xs">2 hours</p>
        </div>
    </div>
    <div class="h-80">
        <img class="h-full rounded-2xl w-full object-cover" src="images/launch.jpeg" alt="">
    </div>

    <div class="my-4">
        <p class="leading-loose text-lg">
           <span class="font-bold text-xl"> The Convenience and Costs of JPA and ORMs</span> <br>
            Java Persistence API (JPA) and other Object-Relational Mapping (ORM) frameworks revolutionized how developers interact with databases. By abstracting SQL into object models, JPA boosts developer productivity — letting engineers work with Java objects instead of writing SQL queries for every operation. This abstraction simplifies CRUD operations and complex relationships, making it faster to develop data access layers. However, this convenience can come at a significant cost in large-scale applications. High-level abstraction often means less control over what’s happening under the hood, which can lead to performance issues when an application grows.

            One common problem is unnecessary data loading. ORMs tend to load entire objects (and sometimes related objects) into memory even if only a few fields are needed. For example, fetching a list of entities might trigger additional queries to load their relations (the infamous N+1 query problem), or it might eagerly load large object graphs by default. Developers using JPA often encounter:

            Unexpected queries: Auto-generated SQL that is not optimal, causing performance bottlenecks.
            Lazy loading pitfalls: The default lazy loading of relations can cause N+1 queries (one query for the main data, plus one per related record), resulting in dozens or hundreds of queries where one would suffice​
            High memory usage: JPA maintains a persistence context (first-level cache) of loaded entities, which consumes memory and can slow down garbage collection. In high-throughput scenarios (batch processing or microservices), this context can become a memory burden​
            Another issue is limited control over SQL. JPA generates SQL for you, but that translation isn’t always optimal or predictable​. Complex queries must be written in JPQL/HQL or as criteria, which can be less intuitive than SQL and may not leverage database-specific features. Developers frequently end up checking the logs to see the actual SQL produced and often have to tweak mappings or use vendor-specific hints to get acceptable performance. In short, JPA’s greatest strength — automating SQL — can become a weakness when you need to squeeze out performance or tailor queries precisely.

            Object Modeling vs. Performance Trade-offs
            JPA’s philosophy is object modeling first. You design an object model with relationships (one-to-many, inheritance hierarchies, etc.), and JPA will handle mapping it to the relational schema. This is great for aligning code with business domain models. But the trade-off is that developers give up fine-grained control over what data is loaded and when. The ORM will decide, based on annotations or configuration, how and when to load related data. If an object has a relationship to another, accessing that field might transparently trigger a database fetch without the developer explicitly writing a query. Managing this behavior (via fetch modes, entity graphs, or DTO projections) adds complexity and is error-prone.

            Because JPA emphasizes a rich domain model, performance optimizations require careful tuning. Developers might disable lazy loading to avoid open session issues, only to end up eagerly loading too much data. Or they might fetch an entire entity just to get a couple of fields, simply because that’s the easiest way with the repository or entity manager API. One common anti-pattern is retrieving full entities and then copying data into DTOs for APIs, which means the application loaded far more data than necessary. As one architecture blog noted, returning full ORM entities and then discarding most of the data in favor of a DTO incurs a significant performance cost in database work, serialization, and network transfer​. In addition, the entity objects themselves carry baggage (proxies, bytecode interceptors, etc.) to support ORM features, which adds overhead when serializing or manipulating these objects​.

            In summary, JPA’s object-first approach makes it difficult to precisely control data loading, often leading to over-fetching or under-fetching problems. At small scale this might be negligible, but at large scale (or in microservices handling high load), these inefficiencies can become major bottlenecks. This has led many performance-conscious teams to seek alternatives or complementary approaches that put SQL and data control back in the developer’s hands.

            Embracing a SQL-First Approach
            The limitations above have sparked a movement toward SQL-first data access in Java. A SQL-first approach means treating the database and SQL queries as first-class citizens rather than something to hide behind an object abstraction. Tools like jOOQ, MyBatis, or Spring’s JDBC template adopt this philosophy, giving developers more explicit control over queries and how results are mapped. By working closer to the SQL, developers can write exactly the queries they need — selecting only required columns, using JOINs to avoid N+1 queries, and leveraging database-specific features for performance.

            However, writing raw JDBC code for everything can reintroduce a lot of boilerplate (opening connections, handling ResultSet mapping, etc.) and can reduce productivity. The ideal solution lies in a balance: we want the control and performance of hand-crafted SQL, but we’d like to avoid repetitive boilerplate code and still work with convenient data structures in Java. This is where norm4j comes into play as a new option.

            Introducing norm4j — Not an ORM for Java
            norm4j (short for “Not an ORM for Java”) is a lightweight, SQL-centric library designed as a performance-conscious alternative to JPA​. It was created for developers who want more control over database interactions and better performance at scale, without giving up the productivity benefits of annotation-driven programming. In other words, norm4j aims to let you stay close to SQL and your database’s nuances, while sparing you from writing low-level JDBC code for every operation.

            While norm4j draws inspiration from JPA (to make adoption easier), it breaks away from traditional ORM patterns​. Importantly, it does not automatically load object graphs. There are no hidden cascade of queries to populate child objects unless you explicitly request them. This means if you fetch a Book record, you won’t unknowingly pull in the entire Author record or a collection of Review objects just because they are related. Developers can still define relationships using familiar annotations, but norm4j will only retrieve related data when you ask for it, giving you fine-grained control over performance and memory usage​.

            Norm4j’s core design revolves around staying close to the database. It encourages thinking in terms of tables, rows, primary keys, and foreign keys rather than complex object networks. It provides just enough abstraction to map query results to Java objects and to automate mundane tasks (like mapping columns to fields), but keeps your hands on the SQL when needed​. In essence, norm4j positions itself as “JPA without the footguns” — you use it similarly to an ORM in code, but under the hood it behaves more like efficient JDBC.

            You can find norm4j as an open-source project on GitHub (at the April Software repository). Being open source means it’s open for contributions, and the maintainers welcome feedback, ideas, and help with testing on different platforms​. This library is built with modern Java standards (Jakarta EE 9+ environment) in mind, making it straightforward to integrate into enterprise applications or new microservices.

            Records Instead of Rich Entities
            One of the key differences in norm4j is its focus on records rather than full-fledged entity objects. In norm4j, a mapped class is essentially a simple data structure that corresponds directly to a database table row. There’s no elaborate object hierarchy or inheritance mapping. In fact, norm4j does not support inheritance in the entity mapping — there’s no @Inheritance strategies, no polymorphic queries. Each class represents a table (or view query) in a one-to-one fashion​. This design keeps things flat and predictable.

            By avoiding inheritance and complex relations in the mapped data classes, norm4j eliminates a lot of the behind-the-scenes machinery that ORMs use (like discriminator columns, proxy subclasses, etc.). There are no automatic deep object references by default​. For example, if a Book has an author_id foreign key, the Book class in norm4j might just have an int authorId field – not an Author object reference. This is a deliberate choice: it prevents loading an entire Author object whenever a Book is loaded, and it sidesteps issues like circular references or lazy initialization exceptions. It also means the Book record is a self-contained piece of data, easy to serialize to JSON or send over the network without pulling in half your database.

            Developers might wonder, “Can I still use objects and inheritance if I want?” Norm4j’s philosophy is to keep the persistence layer simple, but it doesn’t stop you from building an object-oriented layer on top. You could, for instance, create your own domain model classes or service layer that composes these records into richer structures. Norm4j even suggests that you can build wrapper or proxy objects on top of records to simulate traditional OO patterns if needed​. The key point is that norm4j itself will treat the database as a source of tables and rows, and leave the object modeling to your business logic if you choose to do it. This separation can lead to cleaner, more maintainable code: your norm4j records act like efficient DAO results or DTOs, and your business layer can impose any additional structure or behavior.

            Productivity without the Boilerplate
            Despite its SQL-first, record-centric approach, norm4j strives to maintain developer productivity. Using norm4j is not the same as writing raw JDBC with endless ResultSet parsing. It uses annotations and a familiar programming model to avoid boilerplate code. In fact, if you know JPA annotations like @Table, @Column, @Id, etc., you can quickly start using norm4j, because it uses a similar paradigm for defining entities (the library provides its own annotations closely mirroring JPA for familiarity). For example, you might define a simple entity class with norm4j like:
        </p>
    </div>
</main>
</body>
</html>
