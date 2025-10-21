@extends('layouts.layout1')

@section('title', 'MLM Network Tree')

@section('content')
<style>
    body {
        background: radial-gradient(circle at top left, #eef2ff, #ffffff);
    }

    .mlm-wrapper {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        overflow-x: auto;
        min-height: 85vh;
        padding: 50px;
        position: relative;
    }

    .tree {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 120px;
        position: relative;
    }

    .tree-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 90px;
        position: relative;
        min-width: 160px;
    }

    .node {
        text-align: center;
        position: relative;
        transition: all 0.3s ease;
    }

    .node:hover {
        transform: scale(1.05);
    }

    .avatar {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        border: 5px solid rgba(99, 102, 241, 0.7);
        background: rgba(255, 255, 255, 0.95);
        overflow: hidden;
        box-shadow:
            0 0 25px rgba(99, 102, 241, 0.25),
            inset 0 0 10px rgba(99, 102, 241, 0.15);
        transition: 0.4s ease;
    }

    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .node:hover .avatar {
        border-color: #6366f1;
        box-shadow:
            0 0 40px rgba(99, 102, 241, 0.5),
            inset 0 0 12px rgba(99, 102, 241, 0.3);
    }

    .name {
        margin-top: 10px;
        font-weight: 700;
        color: #1e1e2f;
        font-size: 1rem;
    }

    .rank {
        font-size: 0.8rem;
        color: #6366f1;
        font-weight: 600;
    }

    /* Connectors between columns */
    .tree-column:not(:last-child)::after {
        content: "";
        position: absolute;
        top: 50%;
        right: -60px;
        width: 120px;
        height: 2px;
        background: linear-gradient(90deg, #6366f1, #60a5fa, #6366f1);
        opacity: 0.7;
        filter: blur(0.8px);
    }

    /* Vertical connectors within column */
    .tree-column::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, transparent 10%, #6366f1 40%, #60a5fa 60%, transparent 90%);
        opacity: 0.4;
    }

    .tree-column:first-child::before {
        background: none;
    }

    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 25px rgba(99, 102, 241, 0.3); }
        50% { box-shadow: 0 0 45px rgba(99, 102, 241, 0.6); }
    }

    .root-node .avatar {
        border-color: #4f46e5;
        background: linear-gradient(145deg, #fff, #f3f4ff);
        animation: pulse 3s infinite;
    }

    .root-node .name {
        color: #4338ca;
    }

    @media (max-width: 992px) {
        .avatar { width: 85px; height: 85px; }
        .tree-column { gap: 60px; min-width: 120px; }
        .tree-column:not(:last-child)::after { right: -40px; width: 80px; }
        .name { font-size: 0.85rem; }
        .rank { font-size: 0.7rem; }
    }

    @media (max-width: 768px) {
        .tree { flex-direction: column; gap: 80px; }
        .tree-column::before, .tree-column::after { display: none; }
    }
</style>

<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">MLM Network Tree</h2>
            <p class="text-muted">Horizontal view of your extended downline connections</p>
        </div>
        <button class="btn btn-primary shadow-sm"><i class="fas fa-sync-alt me-2"></i> Refresh Tree</button>
    </div>

    <div class="card p-5" style="border-radius:20px; background:rgba(255,255,255,0.9); backdrop-filter:blur(10px);">
        <div class="mlm-wrapper">
            <div class="tree">

                <!-- Level 0 -->
                <div class="tree-column">
                    <div class="node root-node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/94/b0/7a/94b07a7c9822e0d1b99665067136ac86.jpg"></div>
                        <div class="name">You</div>
                        <div class="rank">Root Leader</div>
                    </div>
                </div>

                <!-- Level 1 -->
                <div class="tree-column">
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/a6/de/e9/a6dee99cd487f459069931c60b4925ff.jpg"></div>
                        <div class="name">Referred A</div>
                        <div class="rank">Level 1</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/1200x/69/78/19/69781905dd57ba144ab71ca4271ab294.jpg"></div>
                        <div class="name">Referred B</div>
                        <div class="rank">Level 1</div>
                    </div>
                </div>

                <!-- Level 2 -->
                <div class="tree-column">
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/94/b0/7a/94b07a7c9822e0d1b99665067136ac86.jpg"></div>
                        <div class="name">Member A1</div>
                        <div class="rank">Level 2</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/a6/de/e9/a6dee99cd487f459069931c60b4925ff.jpg"></div>
                        <div class="name">Member A2</div>
                        <div class="rank">Level 2</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/94/b0/7a/94b07a7c9822e0d1b99665067136ac86.jpg"></div>
                        <div class="name">Member B1</div>
                        <div class="rank">Level 2</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/1200x/69/78/19/69781905dd57ba144ab71ca4271ab294.jpg"></div>
                        <div class="name">Member B2</div>
                        <div class="rank">Level 2</div>
                    </div>
                </div>

                <!-- Level 3 -->
                <div class="tree-column">
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/94/b0/7a/94b07a7c9822e0d1b99665067136ac86.jpg"></div>
                        <div class="name">Partner A1-1</div>
                        <div class="rank">Level 3</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/a6/de/e9/a6dee99cd487f459069931c60b4925ff.jpg"></div>
                        <div class="name">Partner A1-2</div>
                        <div class="rank">Level 3</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/94/b0/7a/94b07a7c9822e0d1b99665067136ac86.jpg"></div>
                        <div class="name">Partner B1-1</div>
                        <div class="rank">Level 3</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/1200x/69/78/19/69781905dd57ba144ab71ca4271ab294.jpg"></div>
                        <div class="name">Partner B1-2</div>
                        <div class="rank">Level 3</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/a6/de/e9/a6dee99cd487f459069931c60b4925ff.jpg"></div>
                        <div class="name">Partner B2-1</div>
                        <div class="rank">Level 3</div>
                    </div>
                </div>

                <!-- Level 4 (NEW LAYER) -->
                <div class="tree-column">
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/1200x/69/78/19/69781905dd57ba144ab71ca4271ab294.jpg"></div>
                        <div class="name">Agent X1</div>
                        <div class="rank">Level 4</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/a6/de/e9/a6dee99cd487f459069931c60b4925ff.jpg"></div>
                        <div class="name">Agent X2</div>
                        <div class="rank">Level 4</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/736x/94/b0/7a/94b07a7c9822e0d1b99665067136ac86.jpg"></div>
                        <div class="name">Agent Y1</div>
                        <div class="rank">Level 4</div>
                    </div>
                    <div class="node">
                        <div class="avatar"><img src="https://i.pinimg.com/1200x/69/78/19/69781905dd57ba144ab71ca4271ab294.jpg"></div>
                        <div class="name">Agent Y2</div>
                        <div class="rank">Level 4</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
